<template>
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    {{current_year}} © Cafekonnect
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</template>

<script>
    export default {
        data: function () {
            return {
                current_year: (new Date()).getFullYear()
            }
        },
        mounted() {
        }
    }
</script>