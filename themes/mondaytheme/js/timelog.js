(function($) {

    $(document).ready(function() {

        var basePath = Drupal.settings.basePath;
        var url_logtime = basePath + 'timelog/save';
        var area_tasks = $('.task-item');
        var ajax_request = false;
        

        area_tasks.delegate('.time-log', 'click', function() {
            var task = $(this).closest('.task-item');
            var id = task.attr('my-id');
            var time = task.find('.txt-time').val();

            if (time > 0) {
                save_time(id, time);
            } else {
                alert('you need to enter time value');
            }
            
        });



        /**
         * Save / Log the time to the server
         * @param {int} id 
         * @param {int} time 
         */
        function save_time(id, time) {
            if (ajax_request) {
                return;
            }
            ajax_request = true;

            var data = {
                'idx' : id,
                'timex' : time
            };

            $.ajax({
                'url' : url_logtime,
                'type' : 'POST',
                'data' : data,
                'success': function(data) {
                    location.reload();

                    // ajax_request = false;
                },
                'error' : function(err) {
                    ajax_request = false;
                }
            });
        }

    });

})(jQuery);