$(document).ready(function() {
    $(document).on('click', '.delete-student', function() {
        let id = $(this).data("id");
        if (confirm("Are you sure to delete this record ?")) {
            $.ajax({
                url: "layout/body/student/delete.php",
                type: "GET",
                data: {
                    id: id
                },
                error: function() {
                    alert("Something is wrong, couldn't delete record");
                },
                success: function(data) {
                    alert("Record delete successfully.")
                    window.location.href = "index.php?page=students"
                }
            })
        }
    })
})