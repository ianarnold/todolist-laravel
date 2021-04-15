<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Todo App JavaScript | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }} ">
</head>
<body>
  <div class="wrapper">
    <header>To Do LIST - LARAVEL</header>
    <div class="inputField">
      <input type="text" placeholder="Adicione a tarefa">
      <select>
      <option>sss</option>
      </select>
      <button><i class="fas fa-plus"></i></button>
    </div>
    <ul class="todoList">
      <!-- data are comes from local storage -->
    </ul>
    <div class="footer">
      <span>You have <span class="pendingTasks"></span> pending tasks</span>
      <button>Clear All</button>
    </div>
  </div>

  <!-- <script src="script.js"></script> -->

</body>
</html>