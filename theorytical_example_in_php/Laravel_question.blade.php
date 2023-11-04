->What is Laravel?
Laravel is a open-source in php framework which easy to 
understand.nd follow a MVC(model-view-controller) design pattern.

->why are laravel framework is popular?
This framework gained more popularity after the release of version
3 which included features like Command Line Interface called (Artisan),
Support for the Database system and (migrations).

->What is Laravel Route?
The route is a way of creating a request URL for your application. These URLs 
do not have to map to specific files on a website, and are both human readable and 
SEO friendly. In Laravel, routes are created inside the routes folder. They are are created in the web.
Ex:
Route::get('/route_name', function () {
return view('files'); // resources/view/welcome.blade.php
});
 Or
Route::get('/welcome', 'HomeController@welcome')

->What is perameter Routes in Laravel ?
Jis route ko hum name de dete jo ki niche name dete usko hum perameter route khehte hea
Ex:
route::get('/abc',function(){
    return view('files');
})->name('krishna') {{-- ye route ka kam kabi 
                        hamare pass ek se jyada 
                        anchor tag hote to usme agr
                         humne upar ka name change 
                         krdiya to humko sare anchor 
                         tag me jake name change nhi krna hoga  --}}


->What is Composer in Laravel?
.Composer is a application package manager for php
or Composer humko standard format provide krbata hea jiska used hum
software dependencies nd libraries ke liye krte hea.
.Third party libraries can be installed easily using Composer.
.Composer is used to managing its dependencies.

->What is Laravel Guard?
laravel guard ka used hum user ko aunthenticated krne ke liye kiya jata hea.

->What is CSRF in Laravel ?
CSRF(Cross-Site request Forgery)
*iska used hum protection ke liye kiya jata hea jese ki hum koi web site bnate hea or
usme koi form bnate hea us form ko protect krne ke liye hea hum csrf(Cross-Site request Forgery) ka used krte hea.
*csrf ka used token janrate krta hea or us token ko session se match krta hea.

->What is MVC?
.MVC (model-view-controller)
MVC is a pattern inn software design Commonly used to implement user Interface,data, and controlling logic.
* Model-Manages query and logic.
cammand:php artisan make:model student
* View-handles layout and display.
cammand:koi nhi hoti iske and file jo fronted se related file hoti hea bo ati hea
* Controller-Rautes se jo bi commands milegi use view or model me handle krega.
cammand:php artisan make:controller studentController

->