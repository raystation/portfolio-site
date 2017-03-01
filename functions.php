<?

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use Michelf\Markdown;

function markdown_convert($file){
  # Read file and pass content through the Markdown parser
  $text = file_get_contents($file);
  $html = Markdown::defaultTransform($text);
  return $html;
}
function markdown_exist($filename){
  if ( file_exists($filename) ) {
    $copy = markdown_convert( $filename );
    return $copy;
  } else {
    return FALSE;
  }
}

function string_lower( $string ){
  $string = ( strtolower ( $string ) );
  $string = ( str_replace(" ", "-", $string ) );
  $string = ( str_replace(",", "", $string ) );
  $string = ( str_replace("'", "", $string ) );
  return $string;
}
function get_files($dir){
  $files = array_diff( scandir( $dir ), Array( ".", "..", ".DS_Store" ) );
  $files = array_values($files);
  $files = array_filter(array_merge(array(0), $files));
  return $files;
}
function string_erase( $string, $replace ) {
  $string = ( str_replace( $replace, "", $string ) );
  return $string;
}
function replace_string( $string, $thing_to_replace, $replace_with ){
  $string = ( str_replace($thing_to_replace, $replace_with, $string ) );
  return $string;
}
function get_title($string){
  $content = "";
  $string = replace_string( $string, "img_", "");
  $string = replace_string( $string, ".png", "");
  $string = replace_string( $string, ".jpg", "");
  $string = replace_string( $string, ".JPG", "");
  $string = replace_string( $string, "_-_", "? ");
  $string = replace_string( $string, "_-", "'");
  $string = replace_string( $string, "_____", ": ");
  $string = replace_string( $string, "____", "! ");
  $string = replace_string( $string, "___", ", ");
  $string = replace_string( $string, "__", " & ");
  $string = replace_string( $string, "_", " ");
  // $string = replace_string( $string, "-", " ");

  // $pieces = explode(" ", $string);
  // foreach ($pieces as $key => $piece) {
  //   if ( strlen($piece) < 4 )
  //   {
  //     $content .= strtolower($piece) . " ";
  //   }
  //   else
  //   {
  //     $content .= ucwords($piece) . " ";
  //   }
  // }
  return $string;
}

//converts title into lowercase and no spaces
function downcasespace($string) {
  $string = str_replace(" ", "", $string);
  $string = strtolower($string);
  return $string;
}
function list_html($array){
  echo "<ul>\n";

  foreach ($array as $key => $value) {
    if ( is_int($key) ) {
      echo "<li>$value</li>\n";
    } else {
      echo "<li><a href=\"".$value."\">".$key."</a></li>\n";
    }
  }

  echo "</ul>\n";
}

function random_number($array) {
  $count=count($array);
  $rand=mt_rand(0,$count);
  return $rand;
}

function random_list_items($array,$quantity=5) {
  $count = 0;
  $random_list = array();

  for ($i=0; $i <= $quantity ; $i++) {
    $item = $array[ array_rand($array) ];

    while ( !in_array($item,$random_list) ) {
      $item = $array[ array_rand($array) ];
    }
    $random_list[]=$item;
  }
  // while ( $count <= $quantity ) {

  //  // picks a random item from the array
  //  $item = $array[ array_rand($array) ];
  //  // $number = random_number($array);
  //  // $item = $array[$number];



  //  if ( !in_array($item,$random_list)) {
  //    $random_list[]=$item;
  //    $count++;
  //  }
  // }
  return $random_list;
}

function print_list( $array, $results=5, $randomize=false, $heading=5 ){
  // takes an array, decides whether to randomize it or not, decides how many results to return, and what headline size to return it in
  //special arrays have URLs attached to them
  $special = false;
  $content = "";

  // checks to make sure this is a special type of array with key name and list
  // TODO: Lists: temporary fix where it doesn't check for special arrays
  if ( isset($array["name"]) ) {
    $name = $array["name"];
    $array = $array["list"];
    // if (isset($array["item"])) {
    //   $special=true;
    // }
  }

  $content .= "<h$heading>$name</h$heading><ul>";

  if ( $randomize == true ) {
    shuffle($array);
    // var_dump($array);
    // if ( count($array) < $results ) {
    //  $numbers_array=array_rand($array, count($array) );
    //  shuffle($numbers_array);
    // } else {
    //  $numbers_array=array_rand($array,$results);
    //  shuffle($numbers_array);
    // }
  }

  if ( $results == "all" || $results >= count($array) ) {
    foreach ( $array as $key => $array_item ) {
      $content .= "<li>$array_item";
    }
  } elseif ( $results < count($array) ) {
    for ($i=0; $i <= $results ; $i++) {
      $content .= "<li>$array[$i]";
    }
  }

  // if ( $randomize==false ) {
  //    if ( count($array) < $results ) {
  //      $numbers_array=range(0, count($array) );
  //    } else { $numbers_array=range(0, $results);
  //  }
  // }

  // echo "<h".$heading.">".$name."</h".$heading.">";
  // echo "<ul>";

  // foreach ($numbers_array as $number) {
  //  echo "<li>".$array[$number]."</li>";
  // }
  // echo "</ul>";
  return $content;
}
function html_print_tech_skills() {
  include_once "inc/lists.php";
  $array=list_tech_skills();
  $name=$array["name"];
  $list=$array["list"];
  $bkgcolor="196,216,250";

  foreach ($list as $list_item) {

    if ( $list_item == "clear") {
      echo "<div class='clear'></div>";
    } else {
      $percent=$list_item["percent"];
      $opacity=$percent*0.01;
      echo '<div style="width: '.$percent.'%;background-color:rgba('.$bkgcolor.','.$opacity.');">'.$list_item["skill"].'<span class="float-right nobreak">'.$percent.'</span></div>';
    }
  }
}

function horizontal_bar_chart_100 ( $data ) {
  echo "<div class='bar-chart'></>";
}
function get_emoji($num){
  $emoji_path = "img/emoji";
  $emojis = get_images( $emoji_path );

  $rand = array();

  for ($i=1; $i <= $num; $i++) {
    $random_number = array_rand($emojis);
    while ( in_array( $random_number, $rand ) ) {
      $random_number = array_rand($emojis);
    }
    $rand[] = $random_number;
  }

  foreach ($rand as $key => $value) {
    echo "<img src='" . $emoji_path . "/" . $emojis[$value] . "'>";
  }
}
function get_images($dir){
  $files = array_diff( scandir( $dir ), Array( ".", "..", ".DS_Store" ) );
  return $files;
}
// function related_check() {

//   global $title;

//   if (
//     $title == "Art + Paris" or
//     $title == "Chronicles of Old&nbsp;Rome" or
//     $title == "Chronicles of Old&nbsp;Boston" or
//     $title == "Chronicles of Old New&nbsp;York" or
//     $title == "Chronicles of Old&nbsp;London" or
//     $title == "Chronicles of Old Las&nbsp;Vegas" or
//     $title == "Chronicles of Old&nbsp;Paris" or
//     $title == "City Style"

//     ) { include 'inc/related-museyon.php'; }

//   if (
//     $title == "The 3" or
//     $title == "Suspended Belief Studios" or
//     $title == "Indiginauts" or
//     $title == "Project Animore" or
//     $title == "Abriendo Puertas / Opening&nbsp;Doors" or
//     $title == "Color Chameleon"

//     ) { include 'inc/related-sb.php'; }

//   if (
//     $title == "Pok&eacute;mon: Toy Fair" or
//     $title == "Pok&eacute;mon: Logos" or
//     $title == "Pok&eacute;mon: Toys'R'Us Feature Shop" or
//     $title == "Pok&eacute;mon: 10th Anniversary" or
//     $title == "The Rise of Darkrai" or
//     $title == "Arceus and the Jewel of&nbsp;Life" or
//     $title == "Battle Revolution" or
//     $title == "Pocket Pok&eacute;dex" or
//     $title == "Pok&eacute;mon: Diamond & Pearl Launch" or
//     $title == "Pok&eacute;mon: Toy Fair" or
//     $title == "Licensing Show" or
//     $title == "Pok&eacute;mon: Mystery&nbsp;Dungeon"

//     ) { include 'inc/related-pokemon.php'; }

//   if (
//     $title == "InterestID" or
//     $title = 'NextLesson' or
//     $title = 'NextLesson Lesson Covers' or
//     $title = 'NextLesson Glossary Terms' or
//     $title = 'Interactive Performance Tasks' or
//     $title = 'NextLesson Search and Browse Page' or
//     $title = 'Avatars' or
//     $title = 'Graphics Library'

//     ) { include 'inc/related-nextlesson.php'; }
// }

function print_skill_html(){
  global $tools;
  echo '<div class="chart">';
  foreach ( $tools as $tool) {
    // echo '<div class="outer"><div class="inner" style="width:'.$tool["percent"].'%;">'.$tool["skill"]."</div></div>\n";
    echo "<div class='outer'><div class='inner' style='width:$tool[percent]%'>$tool[skill]</div></div>\n";
  }
  echo '</div>';
}

function related_projects_check( $company ){
  $company_convert =string_lower($company);
  $company_convert = replace_string($company_convert,"-","_");
  // gets the function that returns the array with related projects
  $company_function = "get_" . "$company_convert" . "_projects";

  if ( function_exists($company_function)) {
    $projects_array = $company_function();
  } else {
    $projects_array = NULL;
  }
  return $projects_array;
}
function related_projects_html($array){

}

function get_date($timezone="America/Los_Angeles") {
  date_default_timezone_set($timezone);
  $date["year"]=date('Y');
  $date["day"]=date('D');
  $date["num_day"]=date('d');
  $date["long_day"]=date('l');
  $date["month"]=date('F');
  $date["am_pm"]=date('A');
  $date["hour"]=date('g');
  $date["minutes"]=date('i');
  return $date;
}

function dev_tools($livereload=true,$responsive=true) {
  if ($responsive==true) {
    echo '<div class="responsive-indicator"></div>';
  }
  if ($livereload==true) {
    echo "<script>document.write('<script src=\"http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1\"></' + 'script>')</script>";
  }
}
function print_pun() {
  include_once "inc/lists.php";
  $puns=get_puns();
  shuffle($puns);
  return $puns[0];
}
function sf_weather() {
  include 'inc/phpweatherlib.php';
  $weatherObj=new WeatherLib("KSFO");
  $weather=array();
  $weather["temp"]=intval( $weatherObj->get_temp_f() );
  $weather["condition"]=$weatherObj->get_weather_string();
  return $weather;
}
// fills in the div with links to the thumbnail and title
//deprecated
function workthumb($num) {
  global $works;
  if ( $works[$num] == NULL) {
    return;
  }
  echo '<a href="'.$works[$num]["path"].'"><img src="img/'.$works[$num]["path"].'/thumb.'.$works[$num]["thumb"].'" class="scale-with-grid"></a>'."\n";
  echo "<p>".$works[$num]["name"]."</p>\n";
}

function skeleton_print_thumbnail_4(
  $works_array,
  $number_of_projects=0
  // $header=false,
  // $vertical=false
  ) {

  // CHECKS FOR PROJECT ID AND FILTER
  $id = (isset( $_GET["id"] ) ? $_GET["id"] : null );
  $selected_filter = (isset( $_GET["f"] ) ? $_GET["f"] : null );
  // TODO: get a filtered array in another function

  // PASSES AN ID IF IT EXISTS
  if ( isset($id) ) {
    $id_html = "?id=$id";
  } else {
    $id_html="";
  }

  // THE HEADER
  echo '</div><div class="container portfolio">'."\n";
  global $description;
  if ( isset($description) ) {
    echo "<div class='sixteen columns add-bottom add-top'><hr><h2>Recent Projects</h2></div>";
  }

  // FILTERS
  // checks array for matching tags, if so, then it will push to a new array
  $filtered_array="";
  if ( isset($selected_filter) ) {

    foreach ($works_array as $key => $work) {
      $tags = $work['tags'];
      foreach ($tags as $key => $tag) {
        if ($tag==$selected_filter) {
          $filtered_array[]=$work;
        }
      }
    }
    if ($filtered_array=="") {
      echo "nothing to show";
      return;
    }
    // replace array with filtered array
    $works_array = $filtered_array;
  }


  // SKELETON PRINT
  // populates page with thumbnails from $work
  $count=1;
  $alphacount;
  $omegacount;

  foreach ( $works_array as $key => $array_item ) {
    $alt = html_entity_decode($array_item['name']);
    // TODO: fix vertical thumbnail
    // TODO: mobile: have two thumbnails next to each other
    // $thumb = $vertical ? "thumb-v" : "thumb";
    // echo "$array_item[path]/thumb.jpg";

    // looks for thumbnail

    $project_path = $array_item["path"];
    $img_formats = array("jpg","svg","png");
    foreach ($img_formats as $img_format) {
      // goes through the array of img formats, it it exists, it returns $thumb, else it will be the default img
      if ( file_exists("img/$project_path/thumb.$img_format") ) {
        $thumb = "img/$project_path/thumb.$img_format";
        break;
      }
      $thumb = "thumb-default.jpg";
    }

    if (isset($id)) {
      $project_path = "work?project=$array_item[path]&id=$id";
    } else {
      $project_path = $array_item['path'];
    }

    $thumbnail = "<a href='$project_path' alt='default logo'><img src='$thumb' class='scale-with-grid2'></a>";

    echo "
    <div class='four columns'>
      $thumbnail
      <p>$array_item[name]</p>
    </div>
    ";
    if ( $count == 4 ) {
      echo "<div class='clear'></div>";
      $count = 1;
    } else {
      $count++;
    }
    if ($key == $number_of_projects-1) {
      break;
    }
  }
  //adds project link if it's not the index page
  if ( isset($description) ) {
    // echo '<hr>'."\n";
    echo "<div class='sixteen columns add-bottom'>&#11013; <a class='underline' href='work$id_html'>Back to all projects</a></div>";
  }
  echo "</div>";

}

function skeleton_print_page_thumbnail_4($array) {
  global $description;
  global $path;
  echo "</div><div class='container portfolio'>";
  // populates page with thumbnails from $work
  $count=1;
  $id = (isset( $_GET["id"] ) ? $_GET["id"] : null );

  foreach ( $array as $array_item ) {

    // checks for thumbnails
    if ( file_exists("img/$array_item[path]/thumb.jpg") ) {
      $thumbnail_img = "img/$array_item[path]/thumb.jpg";
    }
    elseif ( file_exists("img/$array_item[path]/thumb.svg") ) {
      $thumbnail_img = "img/$array_item[path]/thumb.svg";
    }
    else
    {
      $thumbnail_img = "img/thumb-default.jpg";
    }
    $alt_text = html_entity_decode($array_item['name']);

    if (isset($id)) {
      $project_path = "work?project=$array_item[path]&id=$id";
    } else {
      $project_path = $array_item['path'];
    }

    echo "
    \t<div class='four columns'><a href='$project_path' alt='$alt_text'>
        <img class='scale-with-grid' src='$thumbnail_img'></a>
        <p>$array_item[name]</p>
      </div>\n";
    if ( $count == 4 )
    {
      echo "<div class='clear'></div>";
      $count = 1;
    }
    else
    {
      $count++;
    }
  }
  echo "</div>";
}

function html_list_link($array,$h=5) {

  if ( !is_null( $array["name"] ) ) { $name=$array["name"]; }
  if ( !is_null( $array["list"] ) ) { $array=$array["list"]; }

  echo "<h".$h.">".$name."</h".$h."><ul>";

  foreach ($array as $list_item) {
    echo "<li><a href='http://".$list_item["url"]."' target='_blank'>".$list_item["item"]."</a></li>";
  }
  echo "</ul>";
}

function pr($var){
  if ( !is_null($var) ) {
    echo $var;
    return true;
  } else {
    return false;
  }
}

function social_print($caption=false){

  // if ( $caption == true ) {
  //   echo '<ul class="list-spacing-fix add-bottom caption">'."\n";
  // } else {
  //   echo '<ul class="list-spacing-fix add-bottom">'."\n";
  // }

  $array = get_social_info();

  foreach ( $array as $key => $value ) {
    echo "<a href='http://www.$value' target='_blank'>$key</a><br>";
  }

  // echo '</ul>';
}
function time_difference($month,$day,$year){
  // gets the current date
  date_default_timezone_set('America/Los_Angeles');
  $current_month = date('m');
  $current_day = date('d');
  $current_year = date('y');

  $date1 = "$year-$month-$day";
  $date2 = "$current_year-$current_month-$current_day";

  $diff = abs(strtotime($date2) - strtotime($date1));

  $years = floor($diff / (365*60*60*24));
  $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
  $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

  printf("%d years, %d months, and %d days", $years, $months, $days);
}
function birthday($birth_month,$birth_day,$birth_year){
  date_default_timezone_set('America/Los_Angeles');

  $date = getdate();
  $current_year = $date["year"];
  $current_month = $date["mon"];
  $current_day = $date["mday"];

  $age = $current_year - $birth_year;
  if ( $current_month >= $birth_month && $current_day >= $birth_day ) {
    return $age;
  } else {
    $age--;
    return $age;
  }
}
function title_ellipsis($string,$limit=27){
    // find out if string is longer than XX letters if so, add ellipsis

    //create string array
    $array = str_split($string);

    $word = "";

    foreach ($array as $key => $array_item) {
        $word .= $array_item;
        if ($key >= $limit) {
            $word .= "...";
            break;
        }
    }
    return $word;
}
function skeleton_html($columns=1,$path,$folder="additional_img"){
  // prints img HTML with a path, columns and folders
  $additional_img_html="";

  $additional_img = get_files("$path/$folder");
  foreach ($additional_img as $key => $img) {
    $img_title = get_title($img);
    if ($columns==2) {
      if ($key % 2 == 0) {
        $class = "omega";
        $clearfix = "<div class='clearfix'></div>";
      }
      else {
        $class = "alpha";
        $clearfix = "";
      }
      $additional_img_html.="
      <div class='six columns $class'>
        <img class='scale-with-grid' src='$path/additional_img/$img' alt='$img_title'>
        <p>$img_title</p>
      </div>
      $clearfix
      ";
    }
    else
    {
      $additional_img_html.="
      <img class='scale-with-grid' src='$path/additional_img/$img' alt='$img_title'>
      <p>$img_title</p>
      ";
    }
  }
  return $additional_img_html;
}
function get_email_body($text){
  $email_text = replace_string( $text, " ", "%20");
  $email_text = replace_string( $email_text, "'", "%27");
  return $email_text;
}
function check_for_img_format($path,$filename='thumb'){
  $img_formats = array("jpg","svg","png");
  foreach ($img_formats as $img_format) {
    // goes through the array of img formats, it it exists, it returns $thumb, else it will be the default img
    if ( file_exists("$path/$filename.$img_format") ) {
      $thumb = "$path/$filename.$img_format";
      return $thumb;
    }
  }
  return FALSE;
}
function get_quick_intro(){
  include_once "inc/resume.php";
  return $quick_intro;
}