<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:black;
        }
        .title{
            font-weight: border;
            color: white;
        }
        th{
            color: yellow;
        }
        td{
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <tr><th colspan="2" class="title">Data About Browser Sent in HTTP Headers</th></tr>  
        <tr><th>Browser's IP address <!--브라우저의 IP주소--></th><td><?=$_SERVER['REMOTE_ADDR']?></td></tr> 
        <tr><th>Type of Browser <!--페이지를 요청하는 데 사용된 브라우저의 타입--></th><td><?=$_SERVER['HTTP_USER_AGENT']?></td></tr>
        <tr><th>HTTP or HTTPS?</th><!--HTTPS를 사용하여 페이지에 접근한 경우에만 추가되며 그 값은 true 이다.--></th><td><?=$_SERVER['HTTPS']?></td></tr>
        <tr><th>...<!--방문자가 링크를 통해 이 페이지에 온 경우라면, 브라우저는 이 페이지에 링크된 페이지의 URL을 보낼 수 있다. 모든 브라우저가 이 데이터를 보내는 것은 아니다.--></th><td><?=$_SERVER['HTTP_REFERER']?></td></tr>
        <tr><th colspan="2" class="title">HTTP Request</th></tr>
        <tr><th>Host name <!--호스트 이름(도메인 이름, IP주소 또는 localhost일 수 있음)--></th><td><?=$_SERVER['HTTP_HOST']?></td></tr>
        <tr><th>URI after host name<!--이 페이지를 요청하는데 사용된 호스트 이름 다음의 URI--></th><td><?=$_SERVER['REQUEST_URI']?></td></tr>
        <tr><th>Query string<!--쿼리 문자열의 모든 데이터//GET parameter list--></th><td><?=$SERVER['QUERY_STRING']?></td></tr>
        <tr><th>HTTP request method<!--HTTP요청 타입: GET or POST--></th><td><?=$SERVER['REQUEST_METHOD']?></td></tr>
        <tr><th colspan="2" class="title">Location of the File Being Executed</th></tr>
        <tr><th>Document root<!--파일시스템 루트에서 실행 중인 파일의 도큐먼트 루트까지의 경로--></th><td><?=$_SERVER['DOCUMENT_ROOT']?></td></tr>
        <tr><th>Path from document root<!--도큐먼트 루트 폴더에서 현재 실행 중인 파일까지의 경로--></th><td><?=$_SERVER['SCRIPT_NAME']?></td></tr>
        <tr><th>Absolute path<!--파일시스템 루트에서 실행 중인 파일의 도큐먼트 루트까지의 경로--></th><td><?=$_SERVER['SCRIPT_FILENAME']?></td></tr>
    </table>

    <!--파일 시스템 루트와 도큐먼트 루트의 차이점 ?
    도큐먼트 루트 : 웹 서버에서 제공되는 웹사이트 파일의 루트 디렉터리입니다. 
    웹 브라우저를 통해 사용자가 접근할 수 있는 파일의 시작 위치이며 웹 서버가 요청을 받으면
    해당 파일을 도큐먼트 루트에서 찾습니다. 도큐먼트 루트는 index.html이나 php 파일과 같은
    웹사이트 리소스가 위치한 폴더입니다. 

    파일시스템 루트 : 운영체제에서 파일 계층 구조의 최상위 디렉터리입니다. 
    리눅스 및 유닉스 계열 운영체제에서는 / 가 파일시스템 루트를 의미하며 이곳에서 모든 하위 디렉터리
    (예. /home ,/var ,/etc)가 존재합니다. 윈도우에서는 C:\가 일반적으로 파일 시스템 루트입니다.
    -->
</body>
</html>