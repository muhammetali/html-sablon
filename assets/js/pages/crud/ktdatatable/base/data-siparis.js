'use strict';
// Class definition

var KTDatatableDataLocalDemo1 = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var dataJSONArray = JSON.parse('[{"RecordID":1,"SiparisKodu":"0374-5070","Tarih":"China","Musteri":"CN","Urunler":"Jiujie","Toplam":"Rempel Inc"},\n' +
            '{"RecordID":2,"SiparisKodu":"63868-257","Tarih":"Philippines","Musteri":"PH","Urunler":"Gibgos","Toplam":"Muller, Leannon and McKenzie"},\n' +
            '{"RecordID":3,"SiparisKodu":"49288-0815","Tarih":"Paraguay","Musteri":"PY","Urunler":"General Elizardo Aquino","Toplam":"Fahey, Rosenbaum and Leannon"},\n' +
            '{"RecordID":4,"SiparisKodu":"49288-0039","Tarih":"Azerbaijan","Musteri":"AZ","Urunler":"Maştağa","Toplam":"Gaylord-Aufderhar"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":98,"SiparisKodu":"42507-004","Tarih":"Mexico","Musteri":"MX","Urunler":"Rancho Nuevo","Toplam":"Borer and Sons"},\n' +
            '{"RecordID":99,"SiparisKodu":"49230-191","Tarih":"Japan","Musteri":"JP","Urunler":"Yokosuka","Toplam":"White, Legros and Carroll"},\n' +
            '{"RecordID":100,"SiparisKodu":"50865-056","Tarih":"Honduras","Musteri":"HN","Urunler":"Yuscarán","Toplam":"Anderson, Pfannerstill and Miller"}]');

        var datatable = $('#kt_datatable_1').KTDatatable({
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
                field: 'Resim',
                title: '',
                width: 50,
                overflow: 'visible',
                autoHide: false,
                template: function() {
                    return '\
							<img class="w-25" src="assets/media/logos/shop-icon.png" />\
						';
                },
            },{
                field: 'SiparisKodu',
                title: 'Sipariş Kodu',
            }, {
                field: 'Tarih',
                title: 'Tarih',
                type: 'date',
                format: 'MM/DD/YYYY',
            }, {
                field: 'Musteri',
                title: 'Müşteri',
            }, {
                field: 'Urunler',
                title: 'Ürünler',
            }, {
                field: 'Toplam',
                title: 'Toplam',
                width: 70,
			}, {
                field: 'FaturaYazdır',
                title: 'Fatura Yazdır',
                sortable: false,
                width: 145,
                overflow: 'visible',
                autoHide: false,
                template: function() {
                    return '\
							<button type="button" class="btn btn-outline-primary py-0" style="font-size:12px">Kargo Etiketi Yazdır</button>\
							<button type="button" class="btn btn-outline-primary py-0" style="font-size:12px">E-fatura Oluştur</button>\
						';
                },
            }, {
                field: 'SiparisDurumu',
                title: 'Sipariş Durumu',
                sortable: false,
                width: 145,
                overflow: 'visible',
                autoHide: false,
                template: function() {
                    return '\
							<button type="button" class="btn btn-primary" style="font-size:12px">Kargo Bekliyor</button>\
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
    KTDatatableDataLocalDemo1.init();
});
