<!-- <?php

class GoogleDriveViewer
{
    public function handleRequest($input)
    {
        $keywordMapping = [];
        $fileId = '';

        if (is_array($input)) {
            $keywordMapping = $input;
        } else {
            $fileId = $input;
        }

        $request_uri = $_SERVER['REQUEST_URI'];
        $segments = explode('?/', $request_uri);
        $keyword = $segments[1];

        if (!empty($keyword)) {
            if (isset($keywordMapping[$keyword])) {
                $id = $keywordMapping[$keyword];
                $this->displayGoogleDriveFile($id);
            } else {
                $this->displayGoogleDriveFile($fileId);
            }
        } else {
            $this->displayGoogleDriveFile($fileId);
        }
    }

    private function displayGoogleDriveFile($fileId)
    {
        $url = 'https://drive.google.com/uc?id=' . $fileId . '&export=download';
        $file_content = @file_get_contents($url);

        if ($file_content !== false) {
            echo $file_content;
        } else {
            echo file_get_contents('404.html');
        }
    }
}

// Input data - keyword-to-fileID mapping and a default file ID
$keywordMapping = array(
    '?/about/' => '1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn',
    '?/contact.html' => '1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn',
    '?/w3ai/' => '1eD1XL64Hr0Agx8S9CJrMGZghJd0cAzAc',
    // Add more keyword-to-fileID mappings as needed
);

// Create an instance of GoogleDriveViewer and handle the request with the keyword-to-fileID mapping
$viewer = new GoogleDriveViewer();
$viewer->handleRequest($keywordMapping);

// Or, handle the request with a specific file ID
// $fileId = 'your_specific_file_id';
// $viewer->handleRequest($fileId);
?>  -->

<?php

/**
 * This code is used to view the client-side web project uploaded in Google Drive.
 */
$keywordMapping = array(
    'about' => '1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn',
    'contact.html' => '1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn',
    'w3ai' => '1eD1XL64Hr0Agx8S9CJrMGZghJd0cAzAc',
    // Add more keyword-to-fileID mappings as needed
);

$request_uri = $_SERVER['REQUEST_URI'];
$segments = explode('?/', $request_uri);
$keyword = $segments[1];

if (!empty($keyword)) {

    if (isset($keywordMapping[$keyword])) {
        $id = $keywordMapping[$keyword];
        $url = 'https://drive.google.com/uc?id=' . $id . '&export=download';
        echo file_get_contents($url);
    } else {
        $url = 'https://drive.google.com/uc?id=' . $keyword . '&export=download';
        $file_content = @file_get_contents($url);
        if ($file_content !== false) {
            echo $file_content;
        } else {
            echo file_get_contents('404.html');
        }
    }
} else {
    echo file_get_contents('index.html');
}


// http://drive2web.infinityfreeapp.com/?/about/
// http://drive2web.infinityfreeapp.com/?/1saj-9H1JZCzhQtnSNMTZT9t_rpIbFcnn

// http://localhost:3000/index2.php?keyword=brainJs
// http://localhost:3000/?keyword=brainJs
// http://localhost:3000/about 