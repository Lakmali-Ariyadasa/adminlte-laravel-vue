<template>
    <div>
        <div class="card" style="padding:30px;">
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Select Project Name</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Project 1</option>
                            <option value="2">Project 2</option>
                            <option value="3">Project 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Select Users</label>
                    <div class="col-sm-9">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">User 1</option>
                            <option value="2">User 2</option>
                            <option value="3">User 3</option>
                        </select>
                    </div>
                </div>
            
                <div class="text-right">
                    <button type="submit" style=" background: #6610f2; border: #6610f2; border-radius: 50px;">Add</button>
                </div>

            </form>

        </div>
    </div>
</template>


<script>
    export default {
        name: "ProjectApprovals",
        props: {

        },
        mounted() {

        }
    }

</script>
