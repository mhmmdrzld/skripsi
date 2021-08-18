<script>
    $(".card-footer").before(' <div class="overlay" id="loader"><img src = "<?= base_url() ?>dist/img/loading.gif" alt = "" ></div>');

    $('#loader').hide();

    $('.datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    });

    $(".decimal").keydown(function(event) {
        if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

        } else {
            event.preventDefault();
        }

        if ($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault();
    });

    $.fn.inputFilter = function(inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    };

    $('.upper').keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });

    function tanggal_null(tgl) {

        if (tgl) {
            if (tgl != '0000-00-00') {
                return moment(moment(tgl, 'YYYY-MM-DD')).format('DD-MM-YYYY')
            } else {
                return ""
            }
        } else {
            return ""
        }
    }

    $('.select2').select2({
        placeholder: "--PILIH--",
        width: 'resolve',
        allowClear: true,
        language: {
            noResults: function(params) {
                return "Tidak Ada Data";
            }
        }
    });

    function not_found() { //kena dihapus
        Swal.fire({
            title: 'Status',
            text: 'Data Tidak Ada',
            icon: 'info',
            showConfirmButton: false,
            timer: 1500

        })
    }

    function swal(title, text, icon, showConfirmButton = false, timer = 1500) {
        Swal.fire({
            title,
            text,
            icon,
            showConfirmButton,
            timer

        })
    }

    function ajax(data_ajax, url) {
        $('#loader').show();
        $.ajax({
            url,
            method: "GET",
            async: false,
            data: {
                nip: nip
            },
            dataType: 'json',
            success: function(data) {
                if (!data) {
                    swal('Status', 'Data tidak ditemukan', 'info')
                    is_data = false;
                } else {
                    data_ajax(data)
                    is_data = true;
                }
                console.log(is_data)
                $('#loader').hide();

            },
            error() {
                $('#loader').hide();
                swal('Status', 'Error', 'warning')
            }
        });
    }

    //fungsi ketika klik data ditabel
    function ajax_click(data, data_ajax, url) {
        $.ajax({
            type: 'GET',
            async: false,
            url,
            data: {
                id: data.id
            },
            dataType: "Json",
            success(r) {
                $('#modal-data').modal('show');
                $('#btn-hapus').show();

                data_ajax(r)

                $('#modaloverlay2').hide();
            },
            error(e) {
                $('#modaloverlay2').hide();
                swal('Status', 'Error', 'warning')
            }

        });
    }

    function ajax_table(param) {
        const table = $('#tabel-data').DataTable({
            "lengthMenu": [
                [10, 25, 50, 100],
                [10, 25, 50, 100]
            ],
            "responsive": true,
            "language": {
                "url": "<?= base_url() ?>plugins/Indonesian-Alternative.json"
            },
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                'url': param.url,
                'data': {
                    nip: nip
                }
            },
            "order": param.order,
            'columns': param.columns,
            "columnDefs": param.columnDefs
        });

        // table.on('order.dt search.dt', function() {
        //     table.column(0, {
        //         search: 'applied',
        //         order: 'applied'
        //     }).nodes().each(function(cell, i) {
        //         cell.innerHTML = i + 1;
        //         table.cell(cell).invalidate('dom');
        //     });
        // }).draw();

        // table.on('order.dt search.dt', function() {
        //     table.column(0, {
        //         search: 'applied',
        //         order: 'applied'
        //     }).nodes().each(function(cell, i) {
        //         cell.innerHTML = i + 1;
        //     });
        // }).draw();

        return table
    }

    $.fn.dataTable.ext.errMode = function(settings, helpPage, message) {
        swal('Status', 'Error', 'warning')
        console.log(message)
    };

    <?php
    $status = $this->session->flashdata('alert');
    if ($status) : ?>
        swal('Status', '<?= $status['message'] ?>', '<?= $status['type'] ?>')
    <?php endif; ?>

    // ================Jquery custom  validation=================
    $.validator.addMethod("exactlength", function(value, element, param) {
        return this.optional(element) || value.length == param;
    }, $.validator.format("Nip tidak valid."));

    $.validator.addMethod("tgl",
        function(value, element) {
            return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/.test(value);
        }, 'Silakan masukkan format tanggal yang benar.'
    );

    $.extend($.validator.messages, {
        required: "Bagian ini harus diisi.",
        remote: "Harap benarkan kolom ini.",
        email: "Silakan masukkan format email yang benar.",
        url: "Silakan masukkan format URL yang benar.",
        date: "Silakan masukkan format tanggal yang benar.",
        dateISO: "Silakan masukkan format tanggal(ISO) yang benar.",
        number: "Silakan masukkan angka yang benar.",
        digits: "Harap masukan angka saja.",
        creditcard: "Harap masukkan format kartu kredit yang benar.",
        equalTo: "Harap masukkan nilai yg sama dengan sebelumnya.",
        maxlength: $.validator.format("Input dibatasi hanya {0} karakter."),
        minlength: $.validator.format("Input tidak kurang dari {0} karakter."),
        rangelength: $.validator.format("Panjang karakter yg diizinkan antara {0} dan {1} karakter."),
        range: $.validator.format("Harap masukkan nilai antara {0} dan {1}."),
        max: $.validator.format("Harap masukkan nilai lebih kecil atau sama dengan {0}."),
        min: $.validator.format("Harap masukkan nilai lebih besar atau sama dengan {0}.")
    });

    function valid(param) {
        $('#form-input').validate({
            // lang: 'id',
            rules: param.rules,
            messages: param.messages,
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    }
</script>