/*
    Using Vue.js with PHP explanation
*/

// In order to have $_POST data on server side, use this & append data to it.
const params = new URLSearchParams();
const URL = 'handler/functions.php';

var application = new Vue({
	el:'#crudApp', // Main Selector ID
	
	// Variables here
	data:{
		allData: '',
		myModel: false,
		actionButton: 'Insert',
		dynamicTitle: 'Add Data',
		event: '',
	},
	
	// Methods or Functions
	methods:{
		fetchAllData:function(){

			params.append('uname', 'fadilxcoder');
			params.append('uid', '17');
			
			// POST data using axios function only
			
/*			axios({
			  method: 'POST',
			  url: 'handler/functions.php',
			  data: params,
			})
*/
			
			// Send parameters on server side, you need to use file_get_contents('php://input')
			
/*			
		    axios.post('handler/functions.php', {
		    	firstName: 'fadil',
    			lastName: 'xcoder',
			})
*/

			// POST data using axios.post function only
/*			
			axios.post('handler/functions.php', params)
*/

			// GET data using axios.get function only
/*
			axios.get('handler/functions.php', {
				params: {
			      id: 12345,
			      idx: 'XYZ'
			    }
			})
*/			

			axios.get(URL)
			.then(function(response){
/*
			    console.log(response);				// Object
			    console.log(response.data);			// Data needed
			    console.log(response.status);		// 200
			    console.log(response.statusText);	// 
			    console.log(response.headers);		// Object
			    console.log(response.config);		// Object
*/			    
				application.allData = response.data; // Affecting the 'v-for="row in allData"' with the response data
			})
			;
		},
		
		openModel: function() {
			application.name = application.email = application.city = application.country = application.job = '';
			application.actionButton = "Insert";
			application.dynamicTitle = "Add Data";
			application.description = "Please insert your data !";
			application.event = "insertFunction";
			application.hiddenId = null;
			application.myModel = true;
		},
		
		submitData: function() {
			
			if (
				application.name != '' && 
				application.email != ''
			) {
				
				if (application.event == 'insertFunction')	{
					saveData(application, 'insertFunction');
				}
				
				if (application.event == 'updateFunction')	{
					saveData(application, 'updateFunction');
				}
			
			} else {
				// alert("Fill All Field");
			}
		},
		
		fetchData: function(id) {
			fetchSingleData(application, id);
		},
		
		deleteData:function(id){
			if (confirm("Are you sure you want to remove this data?")) {
				deleteData(application, id);
			}
		}
	
	},
	created: function() {
		this.fetchAllData();
	}
});

function saveData(application, action) {
	axios.post(URL, {
		action : action,
		name : application.name, 
		email : application.email,
		city : application.city,
		country : application.country,
		job : application.job,
		id : application.hiddenId,
	})
	.then( function(response) {
		console.log(response);
		application.myModel = false;
		application.fetchAllData();
		application.name = application.email = application.city = application.country = application.job = '';
		application.hiddenId = null;
	});
}

function fetchSingleData(application, id) {
	axios.post(URL, {
		action:'fetchSingle',
		id:id
	})
	.then(function(response){
		console.log(response.data.name);
		application.name			= response.data.name;
		application.email			= response.data.email;
		application.city			= response.data.city;
		application.country 		= response.data.country;
		application.job 			= response.data.job;
		
		application.hiddenId		= response.data.id;
		application.myModel 		= true;
		application.actionButton	= 'Update';
		application.dynamicTitle	= 'Edit Data';
		application.description = "Please update your data !";
		application.event = "updateFunction";
	});
}

function deleteData(application, id) {
	axios.post(URL, {
		action:'deleteFunction',
		id:id
	})
	.then( function(response) {
		application.fetchAllData();
	});
}