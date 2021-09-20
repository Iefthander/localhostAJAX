/* Выполнение анонимной функции документа */
$(document).ready(function () {
	/* Выбор тега категории и возможность его изменения */
	$("select[name='country']").bind("change", function () {
		/* Выбор товара */
		$("select[name='city']").empty();
		/* Связываем js вместе с php, следовательно и html тоже */
		$.get("country.php", {country: $("select[name='country']").val()}, function (data) {
			/* Выбираем формат для передачи и получения массивов */
			data = JSON.parse(data);
			/* Определяем значение пункта списка которое будет отправлено на сервер */
			for (let id in data) {
				$("select[name='city']").append($("<option value='" + id + "'>" + data[id] + "</option>"))
			}
		});
	});
});