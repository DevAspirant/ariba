<html>
<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">Vendor Details</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">Modular Questionnaires</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">Question & Answers</th>
        </tr>
    </thead>
     <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300">
            <?php 
                $json_file = 'SLP.json';
 
                if (file_exists($json_file)) {
            
                    $json_data = file_get_contents($json_file);
                    
                    $slp = json_decode($json_data, true);
                   
                    var_dump($slp['tags'][0]['name']);
                    
                }
                
            ?>
        </td>
        <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php  var_dump($slp['tags'][1]['name']); ?></td>
        <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php var_dump($slp['tags'][2]['name']) ?></td>
        </tr>
    </tbody>
<!--
<table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">Question & Answers</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">Certificates</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">Workspaces</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">Update Answers</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">Update Qualification Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"paths": "/vendorDataRequests/"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">request</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/extensionDetails"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/questionnaires/qna":</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/{wid}/questionnaires/qna":</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">wid</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3> "/vendors/{vendorId}/workspaces/questionnaires/{questionnaireId}/qna": </h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">questionnaireId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/{wid}/questionnaires/{questionnaireId}/qna":</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">wid</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">questionnaireId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3> "/vendors/{vendorId}/workspaces/questionnaires/{questionnaireId}/qna/versions": </h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">questionnaireId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/questionnaires/{questionnaireId}/qna/versions/{versionId}":</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">questionnaireId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">versionId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/questionnaires":</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$orderby</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/{wid}/questionnaires":</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">wid</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/questionnaires/{questionnaireId}":</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">questionnaireId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>Modular Questionnaires</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">request</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">questionnaireId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/questionnaires/{questionnaireId}/scores"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">questionnaireId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/certificates"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/questionnaires/{questionnaireId}/answers"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">request</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">questionnaireId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/workspaces/{wid}"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">wid</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"Update Qualification Status"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">request</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/processes"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorID</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$count</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$top</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$skip</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">$filter</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/vendors/{vendorId}/processes/{wid}"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">wid</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"Process Details"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">vendorId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">wid</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">realm</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">request</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/processes/processTypes"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/processes/{processType}/templates"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">processType</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/processes/modularQuestionnairesRequests"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">request</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/processes/processCreateRequests"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">request</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>
    <hr>
    <br>
    <h3>"/jobs/{jobId}"</h3>
    <table class="min-w-full border-collapse">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-r border-gray-300">jobId</th>
            <th class="px-6 py-3 bg-gray-100 text-center text-xs leading-4 font-medium text-gray-500 uppercase border-b border-gray-300">realm</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-6 py-4 text-center border-b border-r border-gray-300"><?php echo 'OK' ?></td>
            <td class="px-6 py-4 text-center border-b border-gray-300"><?php echo 'OK' ?></td>
        </tr>
    </tbody>
</table>-->
</body>
</html>