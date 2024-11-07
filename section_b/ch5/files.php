<?php
/*
file_exists($path) : 파일이 존재하는지 확인한다. 존재한다면 true, 없으면 false
filesize($path) : 파일의 크기를 바이트 단위로 반환한다
mime_content_type($path) : 파일의 미디어 유형을 반환한다. 
unlink($path) :  파일을 삭제하려고 시도한다. 파일이 삭제되면 true 그렇지 않으면 false
pathinfo($path[, $part]) : 파일 경로의 부분을 반환한다. 가져올 경로 부분을 지정할 수 있다. 만약 지정하지 않는다면, 다음 네 개 의 키가 있는 배열을 반환한다. 
    type of $part 
    PATHINFO_DIRNAME : 파일이 있는 디렉터리의 경로
    PATHINFO_BASENAME : 파일의 베이스네임
    PATHINFO_FILENAME : 파일명(확장자없음)
    PATHINFO_EXTENSION : 파일 확장자
basename($path) : 경로로부터 파일의 베이스네임을 반환한다.
dirname($path[, $levels]) : 지정된 파일이 위치하고 있는 디렉터리의 경로를 반환한다. $levels는 올라갈 상위 디렉터리 숫자다.
realpath($path) : 파일의 절대 경로를 반환한다.
*/

$path= "img/logo.png";
?>
<?php include 'includes/header.php';?>
<?php
if(file_exists($path)==TRUE){?>
    <b>Name: </b><p><?= pathinfo($path,PATHINFO_BASENAME);?></p></br>
    <b>Size: </b><p><?= filesize($path);?>bytes</p></br>
    <b>Mime type: </b><p><?=mime_content_type($path);?></p></br>
    <b>Folder: </b><p><?= pathinfo($path,PATHINFO_DIRNAME);?></p>
<?php }
else{?>
<p>There is no such file</p>
<?php  }?>
<?php include 'includes/footer.php'; ?>