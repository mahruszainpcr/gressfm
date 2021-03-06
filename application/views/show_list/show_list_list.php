<?php $this->load->view('templates/header');?>
<div class="row" style="margin-bottom: 20px">
    <div class="col-md-4">
        <h2>Show list List</h2>
    </div>
    <div class="col-md-4 text-center">
        <div id="message">
            <?php echo $this->session->userdata('message') != '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="col-md-4 text-right">
        <div style="margin-top:20px;">
            <?php echo anchor(site_url('show_list/create'), 'Create', 'class="btn btn-primary"'); ?>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped" id="mytable">
    <thead>
        <tr>
            <th width="80px">No</th>
            <th>Judul</th>
            <th>Foto</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Date Created</th>
            <th>Is Active</th>
            <th width="200px">Action</th>
        </tr>
    </thead>

</table><?php $this->load->view('templates/footer');?><script type="text/javascript">
$(document).ready(function() {
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
        return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
    };

    var t = $("#mytable").dataTable({
        initComplete: function() {
            var api = this.api();
            $('#mytable_filter input')
                .off('.DT')
                .on('keyup.DT', function(e) {
                    if (e.keyCode == 13) {
                        api.search(this.value).draw();
                    }
                });
        },
        oLanguage: {
            sProcessing: "loading..."
        },
        processing: true,
        serverSide: true,
        ajax: {
            "url": "show_list/json",
            "type": "POST"
        },
        columns: [{
                "data": "id",
                "orderable": false
            }, {
                "data": "judul"
            }, {
                "data": "foto",
                "render" : function (data) {
return '<img height="40" width="40" src="<?php echo site_url('assets/show/') ?>'+data+'"/>';
}
            }, {
                "data": "jam_mulai"
            }, {
                "data": "jam_selesai"
            }, {
                "data": "date_created"
            }, {
                "data": "is_active"
            },
            {
                "data": "action",
                "orderable": false,
                "className": "text-center"
            }
        ],
        order: [
            [0, 'desc']
        ],
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $('td:eq(0)', row).html(index);
        }
    });
});
</script>