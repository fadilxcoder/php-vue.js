/*
    Using Vue.js with PHP explanation
*/

// In order to have $_POST data on server side, use this & append data to it.
const params = new URLSearchParams();

var application = new Vue({
	el:'#crudApp', // Main Selector ID
	
	// Variables here
	data:{
		allData: '',
		myModel: false,
		actionButton: 'Insert',
		dynamicTitle: 'Add Data',
	},
	
	// Methods or Functions
	methods:{
		fetchAllData:function(){

			params.append('uname', 'fadilxcoder');
			params.append('uid', '17');
			
			// POST data using axios function only
/*			
			axios({
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
			axios.get('handler/functions.php')
			.then(function(response){
			    console.log(response);
			    console.log(response.data);
			    console.log(response.status);
			    console.log(response.statusText);
			    console.log(response.headers);
			    console.log(response.config);
			    
			    /*
			    	Affecting the 'v-for="row in allData"' with the response data
			    */
				application.allData = response.data;
			});
		},
		
		
		openModel:function(){
			application.first_name = '';
			application.last_name = '';
			application.actionButton = "Insert";
			application.dynamicTitle = "Add Data";
			application.myModel = true;
		},
		submitData:function(){
			if(application.first_name != '' && application.last_name != '')
			{
				if(application.actionButton == 'Insert')
				{
					axios.post('action.php', {
						action:'insert',
						firstName:application.first_name, 
						lastName:application.last_name
					}).then(function(response){
						application.myModel = false;
						application.fetchAllData();
						application.first_name = '';
						application.last_name = '';
						alert(response.data.message);
					});
				}
				if(application.actionButton == 'Update')
				{
					axios.post('action.php', {
						action:'update',
						firstName : application.first_name,
						lastName : application.last_name,
						hiddenId : application.hiddenId
					}).then(function(response){
						application.myModel = false;
						application.fetchAllData();
						application.first_name = '';
						application.last_name = '';
						application.hiddenId = '';
						alert(response.data.message);
					});
				}
			}
			else
			{
				alert("Fill All Field");
			}
		},
		fetchData:function(id){
			axios.post('action.php', {
				action:'fetchSingle',
				id:id
			}).then(function(response){
				application.first_name = response.data.first_name;
				application.last_name = response.data.last_name;
				application.hiddenId = response.data.id;
				application.myModel = true;
				application.actionButton = 'Update';
				application.dynamicTitle = 'Edit Data';
			});
		},
		deleteData:function(id){
			if(confirm("Are you sure you want to remove this data?"))
			{
				axios.post('action.php', {
					action:'delete',
					id:id
				}).then(function(response){
					application.fetchAllData();
					alert(response.data.message);
				});
			}
		}
	
	
	
	},
	created:function(){
		this.fetchAllData();
	}
});
