<main>
    <section id="slider" class="slidec">
        <div class="container">
            <div class="todo-bg">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="bg-dark px-5 py-5 text-white-50">To-Do Sample App</h1>
                    </div>
                    <div class="col-12 text-center">
                        <div class="form py-4">
                            <input type="task" class="my-3 py-2 text-muted rounded-pill w-75" id="task" placeholder="Input Your Task">
                            <button type="button" class="rounded-pill py-2 px-5 my-3" id="todo"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="todo-list bg-dark">
                <div class="row">
                    <div class="padding col-12 text-center">
                        <table class="table table-success table-striped">
                            <thead>
                                <tr class="text-left">
                                    <th scope="col">Task</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <th scope="row" id="show"></th>
                                    <td>
                                        <button class="py-3 px-4 rounded-pill"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="py-3 px-4 rounded-pill"><i class="fa-solid fa-delete-left"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>