<?php

//Route::get('test',['as' => 'test', 'uses' => 'FrontendController@test']);
Route::get('/', array('as' => 'index', 'uses' => 'FrontendController@index'));
Route::get('news_list',['as' => 'news.list', 'uses' => 'NewsController@show']);
Route::get('events',['as' => 'event.list', 'uses' => 'FrontendController@event']);
Route::get('event/{id}',['as' => 'event.single', 'uses' => 'FrontendController@eventSingle']);
Route::get('contact',['as' => 'contact', 'uses' => 'contactController@contact_page']);
Route::get('about',['as' => 'about', 'uses' => 'FrontendController@about']);

Route::get('executives',['as' => 'committee', 'uses' => 'FrontendController@committee']);
Route::post('contact_store',['as' => 'contact.store', 'uses' => 'ContactController@store']);
// public routes -- Added by Masiur
Route::get('home', array('as' => 'home', 'uses' => 'FrontendController@index'));
// Blog Public Page

Route::get('blog',['as' => 'blog.index', 'uses' => 'FrontendController@blogPublicPage']);

Route::get('admin', function() {
	return redirect()->route('dashboard');
});

Route::group(['middleware' => 'guest'], function(){
	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::post('login', ['as'=> 'postlogin','uses' => 'Auth\AuthController@doLogin']);
	Route::get('register', ['as'=>'register','uses' => 'UserController@create']);
	Route::post('register', ['as'=>'postRegister','uses' => 'UserController@store']);
	
	// Password reset link request routes...
	Route::get('password/email', ['as' => 'passwordRequest','uses' => 'Auth\PasswordController@getEmail']);
	Route::post('password/email', ['as' => 'postPasswordRequest', 'uses' => 'Auth\PasswordController@postEmail']);
	// Password reset routes...
	Route::get('password/reset/{token}', ['as' => 'getReset', 'uses' =>'Auth\PasswordController@getReset']);
	Route::post('password/reset', ['as' => 'postReset', 'uses' => 'Auth\PasswordController@postReset']);
	// social login route
	Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);
	
   
});
Route::group(array('middleware' => 'auth'), function()
{
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UserController@profile']);
	Route::get('settings', ['as' => 'settings', 'uses' => 'UserController@settings']);
	Route::put('edit-profile', ['as' => 'edit.profile', 'uses' => 'UserController@postEditProfile']);
	Route::get('updateProfilePicture', ['as' => 'editProfilePicture', 'uses' => 'UserController@editProfilePicture']);
	Route::put('new-profile-picture-set', ['as' => 'postEditProfilePicture', 'uses' => 'UserController@postEditProfilePicture']);


	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));
	// Blog CRUD for bloggers
	Route::get('blog/myArticle',['as' => 'blog.myblog', 'uses' => 'BlogController@myblog']);
	Route::get('blog/create',['as' => 'blog.create', 'uses' => 'BlogController@create']);
	Route::post('blog',['as' => 'blog.store', 'uses' => 'BlogController@store']);
	Route::get('blog/{id}/edit',['as' => 'blog.edit', 'uses' => 'BlogController@edit']);
	Route::get('blog/{id}/show',['as' => 'blog.show', 'uses' => 'BlogController@show']);
	Route::put('blog/{id}',['as' => 'blog.update', 'uses' => 'BlogController@update']);

    
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function()
{
	// Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));
	// Event CRUD by Mithun start
   Route::get('event',['as' => 'event.index', 'uses' => 'EventController@index']);
   Route::get('event/create',['as' => 'event.create', 'uses' => 'EventController@create']);
   Route::post('event',['as' => 'event.store', 'uses' => 'EventController@store']);
   Route::get('event/{id}/show',['as' => 'event.show', 'uses' => 'EventController@show']);
   Route::get('event/{id}/edit',['as' => 'event.edit', 'uses' => 'EventController@edit']);
   Route::put('event/{id}',['as' => 'event.update', 'uses' => 'EventController@update']);
   Route::delete('event/{id}',['as' => 'event.delete', 'uses' => 'EventController@destroy']);
   // Mithun end
   // any new admin panel route must be added here 
    Route::get('user',['as' => 'user.index', 'uses' => 'UserController@index']);
	Route::get('user/{id}/activation',['as' => 'user.activation', 'uses' => 'UserController@changeUserActivationStatus']);
	Route::get('user/{id}/show',['as' => 'user.show', 'uses' => 'UserController@show']);
	Route::put('user/{id}',['as' => 'user.update', 'uses' => 'UserController@update']);
	Route::delete('user/{id}',['as' => 'user.delete', 'uses' => 'UserController@destroy']);
    // Pending Blog
    Route::get('read',['as' => 'blog.read', 'uses' => 'BlogController@read']);
	Route::get('listOfArticles',['as' => 'pending.blog', 'uses' => 'BlogController@listOfArticles']);
    Route::get('AdminSingleBlog/{id}',['as' => 'admin.blog.single', 'uses' => 'BlogController@AdminSingleBlog']);
    Route::get('acceptblog/{id}/',['as' => 'blog.activationStatus', 'uses' => 'BlogController@activationStatus']);
    Route::get('ignoreblog/{id}/',['as' => 'ignore.blog', 'uses' => 'BlogController@ignoreBlog']);
    	//Route::delete('blog/{id}',['as' => 'blog.delete', 'uses' => 'BlogController@destroy']);
	Route::get('blog/{id}',['as' => 'blog.accept', 'uses' => 'BlogController@AcceptBlog']);
    
	
   // Member Add or Delete Or List Show
   Route::get('member/add',['as' => 'member.add',   'uses' => 'MemberController@add']);
   Route::get('member', ['as' => 'member.list', 'uses' => 'MemberController@list']);
   Route::post('member/store',['as' => 'member.store', 'uses' => 'MemberController@store']);
   Route::get('member/{id}/edit',['as' => 'member.edit', 'uses' => 'MemberController@edit']);
   Route::put('member/{id}',['as' => 'member.update', 'uses' => 'MemberController@update']);
   Route::delete('member/{id}',['as' => 'member.delete', 'uses' => 'MemberController@destroy']);
  // INFO Update
  
  Route::get('edit',['as' => 'info.edit',   'uses' => 'FrontendController@info_edit']);
  Route::put('info/{id}',['as' => 'info.update', 'uses' => 'FrontendController@info_update']);
});
 //  NEWS CRUD
   Route::get('news',['as' => 'news.index', 'uses' => 'NewsController@index']);
   Route::get('news/create',['as' => 'news.create', 'uses' => 'NewsController@create']);
   Route::post('news',['as' => 'news.store', 'uses' => 'NewsController@store']);
   Route::get('news/{id}/show',['as' => 'news.show', 'uses' => 'NewsController@show']);
   Route::get('news/{id}/edit',['as' => 'news.edit', 'uses' => 'NewsController@edit']);
   Route::put('project/{id}',['as' => 'project.update', 'uses' => 'ProjectController@update']);
   Route::delete('news/{id}',['as' => 'news.delete', 'uses' => 'NewsController@destroy']);
	// Category CRUD
    Route::get('category',['as' => 'category.index', 'uses' => 'CategoryController@index']);
	Route::get('category/create',['as' => 'category.create', 'uses' => 'CategoryController@create']);
	Route::post('category',['as' => 'category.store', 'uses' => 'CategoryController@store']);
	Route::get('category/{id}/edit',['as' => 'category.edit', 'uses' => 'CategoryController@edit']);
	Route::get('category/{id}/show',['as' => 'category.show', 'uses' => 'CategoryController@show']);
	Route::put('category/{id}',['as' => 'category.update', 'uses' => 'CategoryController@update']);
	Route::delete('category/{id}',['as' => 'category.delete', 'uses' => 'CategoryController@destroy']);
   
     //Content CRUD
     Route::get('content/create',['as' => 'content.create', 'uses' => 'ContentController@create']);
     Route::post('content',['as' => 'content.store', 'uses' => 'ContentController@store']);
  
	/* will be Commented Out */
	// Demo CRUD
	Route::get('demo',['as' => 'demo.index', 'uses' => 'DemoController@index']);
	Route::get('demo/create',['as' => 'demo.create', 'uses' => 'DemoController@create']);
	Route::post('demo',['as' => 'demo.store', 'uses' => 'DemoController@store']);
	Route::get('demo/{id}/edit',['as' => 'demo.edit', 'uses' => 'DemoController@edit']);
	Route::get('demo/{id}/show',['as' => 'demo.show', 'uses' => 'DemoController@show']);
	Route::put('demo/{id}',['as' => 'demo.update', 'uses' => 'DemoController@update']);
	Route::get('demo/delete/{id}',['as' => 'demo.delete', 'uses' => 'DemoController@destroy']);
	 // Language CRUD
/*	Route::get('language',['as' => 'language.index', 'uses' => 'LanguageController@index']);
	Route::get('language/create',['as' => 'language.create', 'uses' => 'LanguageController@create']);
	Route::post('language',['as' => 'language.store', 'uses' => 'LanguageController@store']);
	Route::get('language/{id}/edit',['as' => 'language.edit', 'uses' => 'LanguageController@edit']);
	Route::get('language/{id}/show',['as' => 'language.show', 'uses' => 'LanguageController@show']);
	Route::put('language/{id}',['as' => 'language.update', 'uses' => 'LanguageController@update']);
	Route::delete('language/{id}',['as' => 'language.delete', 'uses' => 'LanguageController@destroy']);
*/
Route::get('blog/{title}',['as' => 'blog.single', 'uses' => 'FrontendController@blogSingle']);


