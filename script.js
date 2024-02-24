function generatePDF() {
    // Собираем данные из формы
    var formData = $('#invoiceForm').serialize();
  
    // Отправляем AJAX запрос на сервер для генерации PDF
    $.ajax({
      url: 'generate_pdf.php',
      type: 'post',
      data: formData,
      success: function(response) {
        // Если успешно, открываем сгенерированный PDF в новой вкладке
        var pdfWindow = window.open("", "_blank");
        pdfWindow.document.write(response);
      },
      error: function(xhr, status, error) {
        // Если возникла ошибка, выводим сообщение
        console.error(xhr.responseText);
      }
    });
  }
  