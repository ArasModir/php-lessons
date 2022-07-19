<!Doctype html>

<html lang="en">

<head>

  <meta charset="utf-8"

  <title="Document"</title>

  <style>

header {
  background: #e3e3e3;

  padding: 2em;

  text-align: center;
}

  </style>

  </head>

  <body>

    <h1>Task For the toda</h1>

    <ul>


          <li>

            <strong>Name: </strong><?= $task['title']; ?>

          <!-- <strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>  -->

          </li>

          <li>

            <strong>Due date: </strong><?= $task['due']; ?>

          </li>

          <li>

            <strong>Person Responsible: </strong><?= $task['assign_to']; ?>

          </li>

          <li>

            <?php if ($task['completed']) : ?>

              <span class="icon">&#9989;</span>

            <?php else : ?>

              <span class="icon">Incompleted</span>

            <?php endif; ?>


          </li>



    </ul>

</body>

    </header>

</html>
