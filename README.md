# Notes

- `src/assets/script.js`
- - Call PHP file when page load `created:`
- - Trigger modal to Add New when button is clicked `openModel:`
- - Save data when submitting Add New `submitData:`
- - Trigger modal to Edit when edit button is clicked
- - - Fetching single data from PHP /MySQL `fetchData` which call `fetchSingleData` and seding query data as response
- - - Display modal with data
- - Delete from PHP/MySQL `deleteData:`

- `src/handler/functions.php`
- - Verify type of request handling : `S_GET / $_POST`, *This is determined by axios (axios.get(...), axios.post(...))*
- - check `$_SERVER['REQUEST_METHOD']`
- - Response is return by JSON : `echo json_encode(...)`
 

# URLs

- https://github.com/fadilxcoder/php-vue.js (**Vue - HFX3**)
- https://github.com/fadilxcoder/php-vue.js/tree/video-tutorial (**PHP & Vue**)
- https://github.com/fadilxcoder/php-vue.js/tree/master (**PHP / Vue CRUD**)
- https://github.com/fadilxcoder/php-vue.js/tree/front (**Vue & JSON file - static**)

# Resources

- [Vue.js Cheat Sheet.pdf](https://trello-attachments.s3.amazonaws.com/5a0a7b6c20ff48e3654192d6/5faeae141f92a874e5d4f2f9/e8656af12bec2d7f4f4ce71cb85a8c44/Vue.js_Cheat_Sheet.pdf)
- https://devhints.io/vue

