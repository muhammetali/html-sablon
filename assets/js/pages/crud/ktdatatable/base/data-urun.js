'use strict';
// Class definition

var KTDatatableDataLocalDemo4 = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var dataJSONArray = JSON.parse('[{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":1,"UrunKodu":"0374-5070","Adi":"China","SatisFiyati":"CN","Parabirimi":"Jiujie","Stok":"12","SatilabilirStok":"Rempel Inc","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"},\n' +
            '{"RecordID":100,"UrunKodu":"50865-056","Adi":"Honduras","SatisFiyati":"HN","Parabirimi":"Yuscarán","Stok":"10","SatilabilirStok":"Anderson, Pfannerstill and Miller","EslestirmeAyarlari":"Rempel Inc","SatisDurumu":"Rempel Inc"}]');

        var datatable = $('#kt_datatable_4').KTDatatable({
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
                field: 'UrunKodu',
                title: 'Ürün Kodu',
                width: 70,
            }, {
                field: 'Adi',
                title: 'Adı',
                type: 'date',
                format: 'MM/DD/YYYY',
            }, {
                field: 'SatisFiyati',
                title: 'Satış Fiyatı',
                width: 70,
            }, {
                field: 'Parabirimi',
                title: 'Para Birimi',
                width: 50,
            }, {
                field: 'Stok',
                title: 'Stok',
                width: 50,
			}, {
                field: 'SatilabilirStok',
                title: 'Satılabilir Stok',
            },{
                field: 'Pazaryerleri',
                title: '',
                sortable: false,
                width: 145,
                overflow: 'visible',
                autoHide: false,
                template: function() {
                    return '\
							<img class="" style="width:28px;padding:3px" src="assets/media/logos/n11.png" /><button type="button" class="btn btn-outline-primary py-0" style="font-size:12px">Satışa Çıkar</button>\
							<img class="" style="width:28px;padding:3px" src="assets/media/logos/gittigidiyor.png" /><button type="button" class="btn btn-outline-primary py-0" style="font-size:12px">Satışa Çıkar</button>\
							<img class="" style="width:28px;padding:3px" src="assets/media/logos/hepsiburada.png" /><button type="button" class="btn btn-outline-primary py-0" style="font-size:12px">Satışa Çıkar</button>\
							<img class="" style="width:28px;padding:3px" src="assets/media/logos/trendyol.jpeg" /><button type="button" class="btn btn-outline-primary py-0" style="font-size:12px">Satışa Çıkar</button>\
						';
                },
            },{
                field: 'EslestirmeAyarlari',
                title: 'Eşleştirme Ayarları',
                sortable: false,
                width: 110,
                overflow: 'visible',
                autoHide: false,
                template: function() {
                    return '\
							<button type="button" class="btn btn-outline-primary py-0" style="font-size:12px">Pazaryerleri</button>\
						';
                },
            }, {
                field: 'SatisDurumu',
                title: 'Satış Durumu',
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
    KTDatatableDataLocalDemo4.init();
});
