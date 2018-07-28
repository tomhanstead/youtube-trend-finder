<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"/>
    <title>Youtube Trend Finder</title>
    <meta name="description" content="View videos that are trending in each country on YouTube">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/site.min.js')}}" type="text/javascript"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<header class="header">
    <h1>Youtube Trend Finder</h1>
</header>

<div class="yt-container">
    @if(isset($country))
        <h2>Trending in {{$country}}</h2>
    @endif
    <select id="dynamic_select" required="">
        <option disabled selected value="">Select Country</option>
        <option <?php echo isset( $country ) === 'US' ? 'selected' : ''?> value="/get/videos/US">United States</option>
        <option <?php echo isset( $country ) === 'AR' ? 'selected' : ''?> value="/get/videos/AR">Argentina</option>
        <option <?php echo isset( $country ) === 'AU' ? 'selected' : ''?> value="/get/videos/AU">Australia</option>
        <option <?php echo isset( $country ) === 'AU' ? 'selected' : ''?> value="/get/videos/AU">Austria</option>
        <option <?php echo isset( $country ) === 'BE' ? 'selected' : ''?> value="/get/videos/BE">Belgium</option>
        <option <?php echo isset( $country ) === 'BR' ? 'selected' : ''?> value="/get/videos/BR">Brazil</option>
        <option <?php echo isset( $country ) === 'CA' ? 'selected' : ''?> value="/get/videos/CA">Canada</option>
        <option <?php echo isset( $country ) === 'CL' ? 'selected' : ''?> value="/get/videos/CL">Chile</option>
        <option <?php echo isset( $country ) === 'CO' ? 'selected' : ''?> value="/get/videos/CO">Colombia</option>
        <option <?php echo isset( $country ) === 'CZ' ? 'selected' : ''?> value="/get/videos/CZ">Czech Republic</option>
        <option <?php echo isset( $country ) === 'FR' ? 'selected' : ''?> value="/get/videos/FR">France</option>
        <option <?php echo isset( $country ) === 'DE' ? 'selected' : ''?> value="/get/videos/DE">Germany</option>
        <option <?php echo isset( $country ) === 'HK' ? 'selected' : ''?> value="/get/videos/HK">Hong Kong</option>
        <option <?php echo isset( $country ) === 'HU' ? 'selected' : ''?> value="/get/videos/HU">Hungary</option>
        <option <?php echo isset( $country ) === 'IN' ? 'selected' : ''?> value="/get/videos/IN">India</option>
        <option <?php echo isset( $country ) === 'IE' ? 'selected' : ''?> value="/get/videos/IE">Ireland</option>
        <option <?php echo isset( $country ) === 'IL' ? 'selected' : ''?> value="/get/videos/IL">Israel</option>
        <option <?php echo isset( $country ) === 'IT' ? 'selected' : ''?> value="/get/videos/IT">Italy</option>
        <option <?php echo isset( $country ) === 'JP' ? 'selected' : ''?> value="/get/videos/JP">Japan</option>
        <option <?php echo isset( $country ) === 'JO' ? 'selected' : ''?> value="/get/videos/JO">Jordan</option>
        <option <?php echo isset( $country ) === 'MY' ? 'selected' : ''?> value="/get/videos/MY">Malaysia</option>
        <option <?php echo isset( $country ) === 'MX' ? 'selected' : ''?> value="/get/videos/MX">Mexico</option>
        <option <?php echo isset( $country ) === 'MA' ? 'selected' : ''?> value="/get/videos/MA">Morocco</option>
        <option <?php echo isset( $country ) === 'NL' ? 'selected' : ''?> value="/get/videos/NL">Netherlands</option>
        <option <?php echo isset( $country ) === 'NZ' ? 'selected' : ''?> value="/get/videos/NZ">New Zealand</option>
        <option <?php echo isset( $country ) === 'PE' ? 'selected' : ''?> value="/get/videos/PE">Peru</option>
        <option <?php echo isset( $country ) === 'PH' ? 'selected' : ''?> value="/get/videos/PH">Philippines</option>
        <option <?php echo isset( $country ) === 'PL' ? 'selected' : ''?> value="/get/videos/PL">Poland</option>
        <option <?php echo isset( $country ) === 'SA' ? 'selected' : ''?> value="/get/videos/SA">Saudi Arabia</option>
        <option <?php echo isset( $country ) === 'SG' ? 'selected' : ''?> value="/get/videos/SG">Singapore</option>
        <option <?php echo isset( $country ) === 'ZA' ? 'selected' : ''?> value="/get/videos/ZA">South Africa</option>
        <option <?php echo isset( $country ) === 'KR' ? 'selected' : ''?> value="/get/videos/KR">South Korea</option>
        <option <?php echo isset( $country ) === 'ES' ? 'selected' : ''?> value="/get/videos/ES">Spain</option>
        <option <?php echo isset( $country ) === 'SE' ? 'selected' : ''?> value="/get/videos/SE">Sweden</option>
        <option <?php echo isset( $country ) === 'CH' ? 'selected' : ''?> value="/get/videos/CH">Switzerland</option>
        <option <?php echo isset( $country ) === 'TW' ? 'selected' : ''?> value="/get/videos/TW">Taiwan</option>
        <option <?php echo isset( $country ) === 'AE' ? 'selected' : ''?> value="/get/videos/AE">United Arab Emirates
        </option>
        <option <?php echo isset( $country ) === 'GB' ? 'selected' : ''?> value="/get/videos/GB">United Kingdom</option>
    </select>

        <div class="youtube-feed">
            {{-- <p class="trending">#{{$counter++}} on trending</p>
            <h4>{{$video->snippet->title}}</h4>
            <iframe frameBorder="0" class="lazy" data-src="http://www.youtube.com/embed/{{$video->id}}" width="333"
                    height="333"></iframe> --}}
        </div>
    </div>

<div id="offline"></div>
</body>
</html>
