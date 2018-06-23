<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113312928-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-113312928-1');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    @if (Route::current()->uri() == 'products/{product}')
        <title>{{ $product->medicine_name }} - Order medicine Online in Nepal at OnlineAushadhi.com with FREE home delivery</title>
        <meta name="description" content="Order medicine {{ $product->medicine_name }} at OnlineAushadhi.com now. @if ($product->composition)Know about its composition : {{ trim($product->composition) }},@endif @if ($product->indications)Indications: {{ trim($product->indications) }}, @endif @if ($product->company) Manufacturer : {{ trim($product->company->fullname ) }}, @endif market price: N\A and its top bio-equivalent substitutes / generic alternatives. We deliver all your medicines at your door steps for FREE." />
        <meta name="keywords" content="@if ($product->medicine_name){{ trim($product->medicine_name) }},@endif @if ($product->composition){{ trim($product->composition) }},@endif @if ($product->indications){{ trim($product->indications) }},@endif @if ($product->company){{ trim($product->company->fullname) }},@endif Order medicine online" />
    @elseif (Route::current()->uri() == 'about')
        <title>About Online Aushadhi | Nepali Medicine | Online Medicine</title>
        <meta name="description" content="Online Aushadhi – a locally owned online pharmacy system is developed to provide you safe prescription drugs at most efficient and effective manner." />
        <meta name="keywords" content="customer service, medicine availability, pharmacist." />
    @elseif (Route::current()->uri() == 'products')
        <title>Our Products | First aid kit | Health Instruments</title>
        <meta name="description" content="In addition to free delivery of prescribed medicines, Online Aushadhi also provides a number of other medical products including first-aid kit, surgical tools, glucometer, and other medical items." />
        <meta name="keywords" content="glucometer, sugar level, surgical tools" />
    @elseif (Route::current()->uri() == 'register')
        <title>Create Account | Registration Online | Online Aushadhi</title>
        <meta name="description" content="Customers before ordering medicine online or buying any medical instruments must fill a registry form which requires their email account and phone numbers." />
        <meta name="keywords" content="Free account, create account registry form" />   
    @elseif (Route::current()->uri() == 'faq')
        <title>Frequently asked questions | FAQ Service | Online Pharmacy</title>
        <meta name="description" content="Online Aushadhi is always looking forward to answer its customers queries and questions. We’ve included answers to our some of the most frequently asked questions." />
        <meta name="keywords" content="pharmacist, delivery option, free delivery services" />      
    @elseif (Route::current()->uri() == 'services')
        <title>Online Aushadhi Services | Pharmaceutical services | Online medicine Nepal</title>
        <meta name="description" content="Online Aushadhi is an internet Pharmacy that provides services of delivery of your prescribed medications and other health instruments. it is also a trustworthy system with an refill service and reminder features." />
        <meta name="keywords" content="Refill reminder, trustworthy system, personal data" />       
    @elseif (Route::current()->uri() == 'upload-prescription')
        <title>Prescription form | medical help online | upload prescription</title>
        <meta name="description" content="You can order your medicines online by uploading your prescriptions. Described instructions lets user easily order their medicines and be a member of online aushadhi." />
        <meta name="keywords" content="doctor, care giver" />        
    @elseif (Route::current()->uri() == 'terms')
        <title>Terms and conditions | online Aushadi | online medicine Kathmandu</title>
        <meta name="description" content="All the products and services of Online Aushadhi are subjected to the terms and conditions of the applicable agreements governing their use or sale. User can agree to the terms and review it at any time." />
        <meta name="keywords" content="agreements, disclaimers, information, medications" />        
    @elseif (Route::current()->uri() == 'cart')
        <title>Your Cart | add prescriptions | medicine cart</title>
        <meta name="description" content="Online Aushadhi implements a shopping cart system in which customers can add their desired medical items. This will ease the process of collecting required medical goods at one place." />
        <meta name="keywords" content="Medical Carts, medical items, cart system." />        
    @elseif (Route::current()->uri() == 'first-aid-kit')
        <title>First aid kit | medical aid box | first aid item lists</title>
        <meta name="description" content="First aid kit box is really helpful during emergency situations. It includes all the basic medical items that is required at the first stage of any treatment procedure." />
        <meta name="keywords" content="first aid item list, aid box" />         
    @elseif (Route::current()->uri() == 'return')
        <title>Return Policies | product refund policy | Online Medicine</title>
        <meta name="description" content="At online Aushadhi, we try our best to fully satisfy our customer but in case of certain flaws we have our return policy with applied conditions for our loyal customers." />
        <meta name="keywords" content="tempered products, return, reuse" /> 
    @else
        <title>Online Aushadhi | Free Medicine delivery | online Pharmacy Kathmandu</title>
        <meta name="description" content="Online Aushadhi is an e-pharmacy service oriented pharmaceutical industry. We are committed to safe, reliable and fast delivery of medicines as well as other medical products." />
        <meta name="keywords" content="online medicine purchase, online chemist, medicine shopping online" />
    @endif
    <meta name="copyright" content="Online Aushadhi or Online Medicine is a loacally owned, independent and licensed online pharmacy system" />
    <meta name="robots" content="index, follow" />
    <link rel="shortcut icon"  type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="initial-scale = 1,user-scalable=no,maximum-scale=1.0">

    <!-- styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <!--[if lt IE 9]>
    <link rel="stylesheet" media="all" type="text/css" href="assets/dist/ie.css" />
    <![endif]-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="assets/dist/html5shiv.js"></script>
    <script src="assets/dist/respond.min.js"></script>
    <![endif]-->    
    <link rel="alternate" href="http://onlineaushadhi.com/" hreflang="en-np" />
</head>
<body>
    <div id="wrap" class="menu">
        @include('partials.mobile-nav')
        @include('partials.header')
        @yield('content')
    </div>

    @include('partials.footer')
    @include('modals.login')

    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>    
    <!--<script type="text/javascript">function add_chatinline(){var hccid=12234415;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script> -->
<div class="container">
<style>
.tooltip {
    background-color: black;
    color: #fff;
    border-radius: 6px;
    width:235px;
    padding:5px;
}
</style>
<a href="https://goo.gl/fgquKX" style="position: fixed; right:10px; bottom:20px;" data-toggle="tooltip" data-placement="top" target="_blank" title="नमस्ते ! यहाँहरुलाई औषधी सम्बन्धी केही जानकारी चाहिएमा वा कुनैपनि औषधी तथा औषधीजन्य सामान अर्डर गर्नुपरेमा तलको च्याट आइकोन क्लिक गर्नु होस् । हाम्रो फर्मासिस्तले चांडो भन्दा चांडो उत्तर दिनुहुनेछ। हजुरको दिन शुभ रहोस् । "><img src="http://onlineaushadhi.com/img/facebook-chat.png" alt="Chat" /></a>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>
