<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-50 h-75">
        <div class="d-flex flex-column justify-content-center mb-2 pe-2">
            <h1 class="fw-bold">To-Do List</h1>

            <form class="needs-validation" action="Controller/addTodo" autocomplete="off" method="post" novalidate>
                <div class=" d-flex">
                    <div class="form-floating w-100">
                        <input type="text" class="form-control" name="todo" id="todo" placeholder="Add To Do" required>
                        <label class="form-label" for="todo">Add To Do</label>
                    </div>
                    <button name="submit" class="btn btn-primary ms-3 ratio-1x1" title="Add" value="submit"><i class="fa fa-add"></i></button>
                </div>
            </form>
        </div>

        <div class="h-75">
            <?php
            if (sizeof($_SESSION['todo']) > 1) {
                $todoOrTodos = 'to-dos';
            } else {
                $todoOrTodos = 'to-do';
            }
            ?>

            <h6>You have <?= sizeof($_SESSION['todo']) . " " . $todoOrTodos ?> </h6>
            <div class="h-100 overflow-auto pe-4">
                <?php
                foreach ($_SESSION['todo'] as $number => $todo) {
                ?>
                    <div class="card flex-row justify-content-center align-items-center p-2 mb-3">
                        <p class="col m-0"><?= $todo ?></p>
                        <a href="Controller/RemoveTodo?number=<?= $number ?>" class="text-decoration-none text-white btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</div>