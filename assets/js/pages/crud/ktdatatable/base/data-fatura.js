'use strict';
// Class definition

var KTDatatableDataLocalDemo3 = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var dataJSONArray = JSON.parse('[{"RecordID":1,"FaturaTarihi":"0374-5070","FaturaNumarasi":"China","SiparisKodu":"CN","Musteri":"Jiujie","AraToplam":"Rempel Inc","Vergi":"Rempel Inc","Toplam":"Rempel Inc"},\n' +
            '{"RecordID":1,"FaturaTarihi":"0374-5070","FaturaNumarasi":"China","SiparisKodu":"CN","Musteri":"Jiujie","AraToplam":"Rempel Inc","Vergi":"Rempel Inc","Toplam":"Rempel Inc"},\n' +
            '{"RecordID":1,"FaturaTarihi":"0374-5070","FaturaNumarasi":"China","SiparisKodu":"CN","Musteri":"Jiujie","AraToplam":"Rempel Inc","Vergi":"Rempel Inc","Toplam":"Rempel Inc"},\n' +
            '{"RecordID":1,"FaturaTarihi":"0374-5070","FaturaNumarasi":"China","SiparisKodu":"CN","Musteri":"Jiujie","AraToplam":"Rempel Inc","Vergi":"Rempel Inc","Toplam":"Rempel Inc"}]');

        var datatable = $('#kt_datatable_3').KTDatatable({
            // datasource definition
            data: {
                type: 'local',
                source: dataJSONArray,
                pageSize: 10,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                // height: 450, // datatable's body's fixed height
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [{
                field: 'RecordID',
                title: '#',
                sortable: false,
                width: 20,
                type: 'number',
                selector: {
                    class: ''
                },
                textAlign: 'center',
            }, {
                field: 'FaturaTarihi',
                title: 'Fatura Tarihi',
                type: 'date',
                format: 'MM/DD/YYYY',
            }, {
                field: 'FaturaNumarasi',
                title: 'Fatura Numarası',
            }, {
                field: 'SiparisKodu',
                title: 'Sipariş Kodu',
            }, {
                field: 'Musteri',
                title: 'Müşteri',
            }, {
                field: 'AraToplam',
                title: 'Ara Toplam',
			}, {
                field: 'Vergi',
                title: 'Vergi',
            }, {
                field: 'Toplam',
                title: 'Toplam',
            }, {
                field: 'Islem',
                title: 'İşlem',
                sortable: false,
                width: 145,
                overflow: 'visible',
                autoHide: false,
                template: function() {
                    return '\
							<button type="button" class="btn btn-primary" style="font-size:12px">İptal Et</button>\
						';
                },
            }],
        });

        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
    };

    return {
        // Public functions
        init: function() {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableDataLocalDemo3.init();
});
