<?php 

function dynamicModules()
{
    $result = ['retronesia', 'the-banda-islands', 'buku-kuku-ku', 'mountains-more-ancient', 'about', 'works','penjor-of-bali']; 

    return $result;
}

$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parse_url = explode('/', $url);

$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    foreach ($parse_url as $value) {
		if (!empty($value)) {
			$parseUrl[] = $value;
		}
	}
} else {
	foreach ($parse_url as $value) {
		if (!empty($value)) {
			$parseUrl[] = $value;
		}
	}
}



if (in_array(dynamicModules()[0], $parseUrl)) {
    
    include 'views/layouts/headerPage.php';

    include 'models/frontModel.php';
    include 'controllers/retronesiaController.php';
    include 'views/retronesia.php';

    include 'views/layouts/footer.php';

} elseif (in_array(dynamicModules()[1], $parseUrl)) {
    include 'views/layouts/headerPage.php';

    include 'models/frontModel.php';
    include 'controllers/theBandaIslandsController.php';
    include 'views/the-banda-islands.php';

    include 'views/layouts/footer.php';

} elseif (in_array(dynamicModules()[2], $parseUrl)) {
    include 'views/layouts/headerPage.php';

    include 'models/frontModel.php';
    include 'controllers/bukukuController.php';
    include 'views/buku-kuku-ku.php';

    include 'views/layouts/footer.php';

} elseif (in_array(dynamicModules()[3], $parseUrl)) {
    include 'views/layouts/headerPage.php';

    include 'models/frontModel.php';
    include 'controllers/mountainsMoreController.php';
    include 'views/mountains-more-ancient.php';

    include 'views/layouts/footer.php';

} elseif (in_array(dynamicModules()[4], $parseUrl)) {
    include 'views/layouts/header.php';

    include 'models/frontModel.php';
    include 'controllers/aboutController.php';
    include 'views/about.php';

    include 'views/layouts/footer.php';

}elseif (in_array(dynamicModules()[5], $parseUrl)) {

    include 'views/layouts/header.php';

    include 'models/frontModel.php';
    include 'controllers/workController.php';
    include 'views/work.php';

    include 'views/layouts/footer.php';

} elseif (in_array(dynamicModules()[6], $parseUrl)) {
    include 'views/layouts/headerPage.php';

    include 'models/frontModel.php';
    include 'controllers/penjorController.php';
    include 'views/penjor-of-bali.php';

    include 'views/layouts/footer.php';

} else {
    
    if (is_front_page() == 1) {
        include 'views/layouts/header.php';

        include 'models/frontModel.php';
        include 'controllers/ourController.php';
        include 'views/our-titles.php';

        include 'views/layouts/footer.php';
    } else {
        include 'views/layouts/headerPage.php';

        include 'models/frontModel.php';
        include 'controllers/retronesiaController.php';
        include 'views/retronesia.php';

        include 'views/layouts/footer.php';
    }
    

}

?>