<?php
  $path = "./data.json";
  $data = file_exists($path) ? json_decode(file_get_contents($path)) : [];

  $data[] = $_POST['contents'];

  file_put_contents($path, json_encode($data));

  echo "
    <script>
      alert('추가되었습니다.');
      location.replace('./');
    </script>
  ";