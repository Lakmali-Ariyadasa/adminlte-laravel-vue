<template>
    <div>
        <div v-if="project === 0">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h5 style="color:#6610f2!important;">Your Projects</h5>
                    <div class="col-md-12" style="background: #dbf9f0;padding:20px;">
                        <div style="height:200px;padding:20px;">
                            <p class="text-center" style="font-weight:600;color:#6f42c1;">Add Your First Project</p>
                            <img src="assets/images/nodata.jpg"
                                style="width: 100%;height: 100%;object-fit:contain;" alt="profile-card">
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="project === 1">
            <div class="col-md-12">
                <h5 style="font-weight:600;color:#6f42c1;">Your Projects</h5>
            </div>
            <div class="row text-center">
                <div class="col-sm-6" style="background-color:#8fe38e; height: 100px; border: 5px solid #eee;">
                    <p
                        style="position: absolute; left: 45%; top: 33%; font-weight:600; margin-bottom: 0; background: #ffffff; border-radius: 25px; padding: 4px 8px;">
                        Project 1</p>
                </div>
                <div class="col-sm-6" style="background-color:#8e91e3; height: 100px; border: 5px solid #eee;">
                    <p
                        style="position: absolute; left: 45%; top: 30%; font-weight:600; margin-bottom: 0; background: #ffffff; border-radius: 25px; padding: 4px 8px;">
                        Project 2</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6" style="background-color:#d68ee3; height: 100px; border: 5px solid #eee;">
                    <p
                        style="position: absolute; left: 45%; top: 30%; font-weight:600; margin-bottom: 0; background: #ffffff; border-radius: 25px; padding: 4px 8px;">
                        Project 3</p>
                </div>
                <div class="col-sm-6" style="background-color:rgb(142 227 207); height: 100px; border: 5px solid #eee;">
                    <p
                        style="position: absolute; left: 45%; top: 30%; font-weight:600; margin-bottom: 0; background: #ffffff; border-radius: 25px; padding: 4px 8px;">
                        Project 4</p>
                </div>
            </div>
            <div class="text-center">
                <a href=""> More Projects</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ProfileProjectView",
        props: {

        },
        data() {
            return {
                project: 0
            }
        },
        mounted() {

        }
    }

</script>
