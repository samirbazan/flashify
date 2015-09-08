# flashify
Helper With Elegant Message for L5.1

This utilice SweetAlert For Work....

***** you can Update the files of SweetAler if you want just remeber put in Public\css & Public\js *****

1.- For Start just need put "instore/flashify": "dev-master" in your composer.json

2.- Run composer update

3.- Register "InStore\\Flashify\\": "vendor/instore/flashify/src" for Autoload in composer.json - PSR4 

4.- Register Service Provider in your app.php in config :  InStore\Flashify\FlashifyServiceProvider::class this can work with L5 .

5.- Run PHP artisan vendor:publish

6.- Put in your layout, template or page:

      <link href="{{ asset('css/sweetalert.css')}}" rel="stylesheet" type="text/css">

and

      <script src="{{ asset('js/sweetalert.min.js') }}"></script>

7.- Finally include a view in flashify folder of resources

      @include('flashify.flash')
 
8.- YOUR DONE!
 
For Usage:
 
 
 just call the function helper....
 
              flash()->"Event"('Here the Title', 'Here the content of message');
 
 Event can be:
 
              Info, Success, Error, Overlay.
              
  You Can modify the helper in Vendor/Instore/Flashify/Helper or modify the model in  Vendor/Instore/Flashify/Model 
  
  
  Thanks to Jeffrey Way of Laracast for idea ...
  
  BR SamirBazan - @SHoUkI666
  
