<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Api Guide
### Get All Categories *(Type : Get)*

  http://127.0.0.1:8000/ **api** / **category** /
  ---
  
 ### Add New Category *(Type : post)*
  http://127.0.0.1:8000/ **api** / **category** /
  
  #### Request parameters 
  - id (auto generate)
  - name *(string)* *(required)*
  - quantity *(number)* *(not required)*
  ---
  ### Get Specific Categorey  *(Type : Get)*
  
  #### 
  http://127.0.0.1:8000/ **api** / **category** / **{id}**

### Edit Specific Category *(Type : Get)*
  http://127.0.0.1:8000/ **api** /**category**/**{id}**/**edit**
  
  ---
### Delete Specific Category *(Type  :  Post)*
 http://127.0.0.1:8000/ **api** /**category**/**{id}**
 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# BookStoreApi" 
