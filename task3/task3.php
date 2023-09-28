<?php
// Ex1
echo'***************************Ex1************************************';

$countryList = [
    'CA' => 'Canada',
    'US'=> 'United States'];
    echo '<pre>';
    var_dump ($countryList);
    echo '<pre>';
    print_r ($countryList);
    echo '<pre>';
    $stateList['CA'] = [
        'AB'=> 'Alberta',
        'BC'=> 'British Columbia',
        'AB'=> 'Alberta',
        'BC'=> 'British Columbia',
        'MB'=> 'Manitoba',
        'NB'=> 'New Brunswick',
        'NL'=> 'Newfoundland/Labrador',
        'NS'=> 'Nova Scotia',
        'NT'=> 'Northwest Territories',
        'NU'=> 'Nunavut',
        'ON'=> 'Ontario',
        'PE'=> 'Prince Edward Island',
        'QC'=> 'Quebec',
        'SK'=> 'Saskatchewan',
        'YT'=> 'Yukon'];
        echo '<pre>';
        var_dump ($stateList ['CA']);
        echo '<pre>';
        print_r ($stateList ['CA']);
        echo '<pre>';
        echo $stateList['CA']['NS'];
        /////////////////////////////////
        
$stateList['US'] = [
    'AL'        => 'Alabama',
    'AK'        => 'Alaska',
    'AZ'        => 'Arizona',
    'AR'        => 'Arkansas',
    'CA'        => 'California',
    'CO'        => 'Colorado',
    'CT'        => 'Connecticut',
    'DE'        => 'Delaware',
    'DC'        => 'District of Columbia',
    'FL'        => 'Florida',
    'GA'        => 'Georgia',
    'HI'        => 'Hawaii',
    'ID'        => 'Idaho',
    'IL'        => 'Illinois',
    'IN'        => 'Indiana',
    'IA'        => 'Iowa',
    'KS'        => 'Kansas',
    'KY'        => 'Kentucky',
    'LA'        => 'Louisiana',
    'ME'        => 'Maine',
    'MD'        => 'Maryland',
    'MA'        => 'Massachusetts',
    'MI'        => 'Michigan',
    'MN'        => 'Minnesota',
    'MS'        => 'Mississippi',
    'MO'        => 'Missouri',
    'MT'        => 'Montana',
    'NE'        => 'Nebraska',
    'NV'        => 'Nevada',
    'NH'        => 'New Hampshire',
    'NJ'        => 'New Jersey',
    'NM'        => 'New Mexico',
    'NY'        => 'New York',
    'NC'        => 'North Carolina',
    'ND'        => 'North Dakota',
    'OH'        => 'Ohio',
    'OK'        => 'Oklahoma',
    'OR'        => 'Oregon',
    'PA'        => 'Pennsylvania',
    'RI'        => 'Rhode Island',
    'SC'        => 'South Carolina',
    'SD'        => 'South Dakota',
    'TN'        => 'Tennessee',
    'TX'        => 'Texas',
    'UT'        => 'Utah',
    'VT'        => 'Vermont',
    'VA'        => 'Virginia',
    'WA'        => 'Washington',
    'WV'        => 'West Virginia',
    'WI'        => 'Wisconsin',
    'WY'        => 'Wyoming'
    ];
    echo '<pre>';
    var_dump ($stateList['US']);
    echo '<pre>';
    print_r ($stateList['US']);
    echo '<pre>';
    print_r ($stateList['US']['WA']);
    echo '<pre>';
    echo $stateList['US'] ['KS'];
    echo '<pre>';
    /////////////////////////////////Ex2
    echo'***************************Ex2************************************';
    echo '<pre>';
    $max_int = PHP_INT_MAX . "<br>";
    echo'max_int='. $max_int .
     "<br>";
    $arr = [];
    $arr[1] = 'last name'; 
    
    $arr[ $max_int ] = 'this is max of array '; 
    
    $arr[0] = 'first name'; 
    
    $arr[]  = 'this may be at the last of array';
    print_r ($arr);

////////////////////////////////////////////////Ex3
echo'***************************Ex3************************************';
echo '<pre>';

///using count
     echo 'using count' ,'<pre>';
     echo '<pre>'; 
     echo 'count of $stateList["US"] is'. count($stateList['US']);//using count
     echo '<pre>';
     /////////////////////
     echo 'using in_array' ,'<pre>';

     if (in_array("Oregon", $stateList['US'])) //using in_array
  {  
  echo 'Oregon' . ' in_array';
  }
else
  {
  echo "not found";
  }
  echo '<pre>';
  ///////////////////////////////array_key_exists
  echo 'array_key_exists  ';echo '<pre>';

  echo '<pre>';
  if (array_key_exists(60,$stateList['US']) ||  array_key_exists('KS',$stateList['US']) )
  {
  echo "Key exists!";
  echo '<pre>';
  }
else
  {
  echo "Key does not exist!";
  }
//////////////////////////////////array_keys
echo 'array_keys';
echo '<pre>';
$a=[0=>"a",1=>"b",2=>" c" ,3=>"d" ];
print_r(array_keys($a,"X5"));
///////////////////////////////////////  array_values
echo 'array_values';
echo '<pre>';
print_r (array_values($a));
////////////////////////////////////array_sum
echo 'array_sum';
echo '<pre>';
$b=[0=>"5",1=>"6",2=>"7" ,3=>'8'];
echo (array_sum($b));
echo '<pre>';
/////////////////// using end
echo 'using end';
echo '<pre>';
echo (end($b));
echo '<pre>';
////////////////////////////array_rand
echo 'array_rand';
echo '<pre>';
print_r(array_rand($b,2));
echo '<pre>';
///////////////////// array_merge
echo 'array_merge';
echo '<pre>';
print_r(array_merge($a,$b));
echo '<pre>';
//////////////////////////array_replace
echo 'array_replace';
echo '<pre>';
print_r (array_replace($a,$b));
echo '<pre>';
///////////////////////array_shift
echo 'array_shift';
echo '<pre>';
print_r (array_shift($b));
print_r ($b);
echo '<pre>';
//////////////////////array_unshift
echo 'array_unshift';
echo '<pre>';
array_unshift($b,5);
print_r ($b);
echo '<pre>';
///////////////////////////////////array_push
echo 'array_push';
echo '<pre>';
array_push($b,5);
print_r ($b);
echo '<pre>';
///////////////////////////array_pop
echo 'array_pop';
echo '<pre>';
array_pop($b);
print_r ($b);
echo '<pre>';
////////////////////////array_slice
echo 'array_slice';
echo '<pre>';
print_r (array_slice($b,1));
echo '<pre>';
/////////////////////////////////array_splice
echo 'array_splice';
echo '<pre>';
print_r (array_splice($a,1,3,$b));
print_r ($a);
echo '<pre>';

    ?>


    