<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">Create Task</div>

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="title"
                                    aria-describedby="titleHelp"
                                    placeholder="Enter a title"
                                />
                                <small
                                    id="titleHelp"
                                    class="form-text text-muted"
                                    >Title of your task.</small
                                >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"
                                    >Description</label
                                >
                                <textarea
                                    class="form-control"
                                    id="description"
                                    cols="30"
                                    rows="5"
                                ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">
                                Create
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tasks</div>

                    <div class="card-body">
                        <div class="list-group">
                            <a
                                href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start"
                            >
                                <div
                                    class="d-flex w-100 justify-content-between"
                                >
                                    <h5 class="mb-1">Task 1</h5>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">
                                    Donec id elit non mi porta gravida at eget
                                    metus. Maecenas sed diam eget risus varius
                                    blandit.
                                </p>
                                <div
                                    class="d-flex flex-row justify-content-end"
                                >
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                    >
                                        Done
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                        style="margin-left: 10px"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </a>
                        </div>

                        <nav aria-label="Page navigation example" class="mt-3">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
