<?php
/**
 * This code is used to view the client-side web project uploaded in Google Drive.
 */
$keywordMapping = array(
    'about' => '1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn',
    'brainJs' => '1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn',
    'w3ai' => '1eD1XL64Hr0Agx8S9CJrMGZghJd0cAzAc',
    // Add more keyword-to-fileID mappings as needed
);

$request_uri = $_SERVER['REQUEST_URI'];
$segments = explode('/', $request_uri);
$keyword = $segments[1]; 

if (!empty($keyword)) {

    if (isset($keywordMapping[$keyword])) {
        $id = $keywordMapping[$keyword];
        echo file_get_contents('https://drive.google.com/u/4/uc?id=' . $id . '&export=download');
    } else {
        echo file_get_contents('404.html');
    }

} else {
    echo file_get_contents('index.html');
}

// http://localhost:3000/index2.php?keyword=brainJs
// http://localhost:3000/?keyword=brainJs

// http://localhost:3000/about
?>