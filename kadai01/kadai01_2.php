<?php
require_once __DIR__ . "/kadai01_resource.php";
//POSTデータ
$departmentId = filter_input(INPUT_POST, "department", FILTER_VALIDATE_INT);
$courseId = filter_input(INPUT_POST, "course", FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, "name");
$kana = filter_input(INPUT_POST, "kana");
$note = filter_input(INPUT_POST, "note");
//バリデーションチェック
//　名前の区切りスペースを半角スペースに統一する
$name = mb_convert_kana($name, "s", "UTF-8");
//　フリガナを全角で統一する
$kana = mb_convert_kana($kana, "KV", "UTF-8");
//XSSクロスサイトスクリプティング)　対策 (表示の直前が良い)
$name = htmlspecialchars($name, ENT_QUOTES, "UTF-8");
$kana = htmlspecialchars($kana, ENT_QUOTES, "UTF-8");
$note = htmlspecialchars($note, ENT_QUOTES, "UTF-8");
//備考の改行を再現(表示の直前が良い)
$note = nl2br($note, false);

//学科IDから学科名を抽出
// $departmentName = "";
// foreach ($school["departments"] as $department) {
//   // var_dump($departmentId, $department["id"]);
//   if ($department["id"] === $departmentId) {
//     $departmentName = $department["name"];
//   }
//   if ($department["id"] !== $departmentId) {
//     continue; //次のループに移行
//   }
//   $departmentName = $department["name"];
//   break;
// }

// $courseName = "";
// $courseAnnual = "";
// foreach ($school["departments"] as $department)
//   foreach ($department["courses"] as $course) {
//     // var_dump($courseId, $course["id"]);
//     if ($course["id"] === $courseId) {
//       $courseName = $course["name"];
//       $courseAnnual = $department["annual"];
//     }
//   }
//foreachを一つで完結させる
$departmentName = "";
$courseName = "";
$courseAnnual = "";
// foreach ($school["departments"] as $department)
//   foreach ($department["courses"] as $course) {
//     // var_dump($departmentId, $department["id"]);
//     if ($department["id"] === $departmentId) {
//       $departmentName = $department["name"];
//     }
//     if ($course["id"] === $courseId) {
//       // var_dump($courseId, $course["id"]);
//       $courseName = $course["name"];
//       $departmentName = $department["name"];
//       $courseAnnual = $department["annual"];
//     }
//     if ($department["id"] !== $departmentId) {
//       continue; //次のループに移行
//     }
//     $departmentName = $department["name"];
//     break;
//   }
foreach ($school["departments"] as $department) {
  if ($department["id"] !== $departmentId) {
    continue; //次のループに移行
  }
  $departmentName = $department["name"];
  $courseName = "コースの選択が間違っています";
  foreach ($department["courses"] as $course) {
    if ($course["id"] === $courseId) {
      $courseName = $course["name"];
      $departmentName = $department["name"];
    }
    $departmentName = $department["name"];
    break;
  }
  break;
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link -->
  <link href="css/style.css" rel="stylesheet">

  <!-- script -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>php1 - kadai01_2</title>
</head>

<body class="bg-slate-50">
  <div class="wrapper w-screen h-screen box-border">

    <header class="bg-teal-500">
      <div class="container mx-auto px-2 py-5">
        <h1 class="text-l text-white mb-6">サーバーサイドスクリプト演習１</h1>
        <h2 class="text-white text-3xl">formの復習</h2>
      </div><!--/.container-->
    </header>

    <main>
      <div class="container w-full h-full mx-auto px-2 py-20">

        <div class="flex flex-col lg:flex-row mb-20">
          <div class="lg:w-6/12 lg:mr-10">
            <div class="lg:flex mb-10">
              <div class="lg:w-1/2 mb-10 lg:mr-5 lg:mb-0">
                <label class="block" for="department">学科</label>
                <p class="text-md p-1.5 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= $departmentName ?></p>
              </div>

              <div class="lg:w-1/2">
                <label class="block" for="course">コース</label>
                <p class="text-md p-1.5 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= $courseName ?></p>
              </div>
            </div>

            <div class="mb-10">
              <label class="block" for="name">名前</label>
              <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= $name  ?></p>
            </div>

            <div class="mb-10 lg:mb-0">
              <label class="block" for="kana">フリガナ</label>
              <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= $kana ?></p>
            </div>
          </div>



          <div class="lg:w-6/12 flex flex-col items-stretch">
            <label class="w-full" for="freeword">備考</label>
            <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-mdmpcs//"><?= $note ?></p>
          </div>

        </div>

        <div class=" flex justify-end">
          <a href="kadai01_1.php" class="block w-40 h-10 text-white text-center leading-10 bg-gray-500 mr-10 hover:bg-gray-400 rounded-md">入力に戻る</a>
          <a href="#" class="block w-40 h-10 text-white text-center leading-10 bg-pink-600 hover:bg-pink-500 rounded-md">送信する</a>
        </div>

      </div><!--/.container-->
    </main>

  </div><!--/.wrapper-->
</body>

</html>