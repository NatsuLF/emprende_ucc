jQuery.datetimepicker.setLocale('es');
$('#date').datetimepicker({
    i18n: {
        es: {
            months: [
                'Enero', 'Febrero', 'Marzo', 'Abril',
                'Mayo', 'Junio', 'Julio', 'Agosto',
                'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ],
            dayOfWeek: [
                'Domingo', 'Lunes', 'Martes',
                'Miercoles', 'Jueves', 'Viernes', 'Sabado'
            ]
        }
    },
    timepicker: false,
    format: 'Y-m-d',
    minDate: 0
});