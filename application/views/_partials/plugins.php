<script>
    $(".card-footer").before(' <div class="overlay" id="loader"><img src = "<?= base_url() ?>dist/img/loading.gif" alt = "" ></div>');

    $('#loader').hide();

    $.fn.dataTable.ext.errMode = function(settings, helpPage, message) {
        swal('Status', 'Error', 'warning')
        console.log(message)
    };

    $('.upper').keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });

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

    $('.datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    });

    function Tanggal(tgl) {
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

    function TimesFormat(time) {

        return moment(moment(time, 'hh:mm:ss')).format('h:mm')
    }

    function ajax_click(data, data_ajax, url, action) {
        $('#form-input').prop('action', action)
        $.ajax({
            type: 'GET',
            async: false,
            url,
            data: data.param,
            dataType: "Json",
            success(r) {
                $('#modal-data').modal('show');

                data_ajax(r)

                $('#modaloverlay2').hide();
            },
            error(e) {
                $('#modaloverlay2').hide();
                swal('Status', 'Error', 'warning')
            }

        });
    }

    function hapus_data(url, data) {
        Swal.fire({
            title: 'Yakin Ingin Menghapus  ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#aaa',
            confirmButtonText: 'Iya, Hapus !'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url,
                    data: data.param,
                    dataType: "Json",
                    success: function(r) {
                        swal('Status', 'Berhasil', 'success')
                        location.reload();
                    },
                    error(e) {
                        swal('Status', 'Gagal Disimpan', 'warning')
                        location.reload();
                    }
                })
            }
        })
    }

    function simpan_data() {
        $('#modaloverlay2').show();
        if ($("#form-input").valid()) {
            $.ajax({
                type: $('#form-input').prop('method'),
                url: $('#form-input').prop('action'),
                data: $('#form-input').serialize(),
                success(r) {
                    console.log(r)
                    swal('Status', 'Berhasil', 'success')
                    $('#modaloverlay2').hide();
                    location.reload();
                },
                error(e) {
                    swal('Status', 'Gagal Disimpan', 'warning')
                    $('#modaloverlay2').hide();
                    location.reload();
                }
            });

        } else {
            swal('Status', 'Form Harus Dilengkapi', 'warning')
            $('#modaloverlay2').hide();
        }
    }

    function SimpanData() {



        var form = $('#form-input');
        var formData = false;

        if (window.FormData) {
            formData = new FormData($('#form-input')[0]);
        }

        $('#modaloverlay2').show();

        if ($("#form-input").valid()) {
            $.ajax({
                type: $('#form-input').prop('method'),
                url: $('#form-input').prop('action'),
                processData: false,
                contentType: false,
                data: formData ? formData : form.serialize(),
                // dataType: 'json',
                success(r) {
                    console.log(r)
                    swal('Status', 'Berhasil', 'success')
                    $('#modaloverlay2').hide();
                    location.reload();
                },
                error(e) {
                    swal('Status', 'Gagal Disimpan', 'warning')
                    $('#modaloverlay2').hide();
                    location.reload();
                }
            });
        } else {
            swal('Status', 'Form Harus Dilengkapi', 'warning')
            $('#modaloverlay2').hide();
        }
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
                'data': param.data
            },
            "order": param.order,
            'columns': param.columns,
            "columnDefs": param.columnDefs,
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
        return table
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



    //validator
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

    $.validator.addMethod("tgl",
        function(value, element) {
            return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/.test(value);
        }, 'Silakan masukkan format tanggal yang benar.'
    );
</script>