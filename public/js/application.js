/**
 * Sums the values of the style form and make the ajax request 
 * to show the result of the learning style.
 */
function learningStyles() {
  ec = sumValuesColumn('ec', [2, 3, 4, 5, 7, 8]);
  or = sumValuesColumn('or', [1, 3, 6, 7, 8, 9]);
  ca = sumValuesColumn('ca', [2, 3, 4, 5, 8, 9]);
  ea = sumValuesColumn('ea', [1, 3, 6, 7, 8, 9]);

  data = { "ec": ec, "or": or, "ca": ca, "ea": ea };
  ajaxRequest('/styles', data);
}

/**
 * Sums the specified values of the specified column of the style form.
 * 
 * @param  {string} col     Column's name.
 * @param  {array}  indeces Indices of the values to add.
 * @return {int}    column  Result of sum the values.
 */
function sumValuesColumn(col, indeces) {
  let column = 0;
  for (let i = indeces.length - 1; i >= 0; i--) {
    column += parseInt($(`#${col}${indeces[i]}`).val())
  }
  return column;
}

/**
 * Make the ajax request to show the result of the home campus.
 * Validate the entry of the weighted average of the form.
 */
function campus() {
  if (validateAverage()) {
    data = $('#campusForm').serialize();
    ajaxRequest('/campus', data);
  }
}

/**
 * Make the ajax request to show the result of the gender.
 * Validate the entry of the weighted average of the form.
 */
function getGender() {
  if (validateAverage()) {
    data = $('#genderForm').serialize();
    ajaxRequest('/gender', data);
  }
}

/**
 * Make the ajax request to show the result of the learning style.
 * Validate the entry of the weighted average of the form.
 */
function learningStyle() {
  if (validateAverage()) {
    data = $('#styleForm').serialize();
    ajaxRequest('/style', data);
  }
}

/**
 * Make the ajax request to show the result of the network class.
 */
function network() {
  data = $('#networkForm').serialize();
  ajaxRequest('/network', data);
}

/**
 * Make the ajax request to show the result of the professor type.
 */
function professor() {
  data = $('#professorForm').serialize();
  ajaxRequest('/professor', data);
}

/**
 * Make the ajax request and show the result.
 * 
 * @param {string} url  Address of the request.
 * @param {array}  data Information.
 */
function ajaxRequest(url, data) {
  $.ajax({
    type: "POST",
    url: url,
    data: data,
    beforeSend: function () {
      $("#loader").show();
      $('#result').hide();
    },
    success: function(data) {
      $("#loader").hide();
      $('#result').show();
      $('#result').children('span').text(data);
    }
  });
}

/**
 * Validate the entry of the weighted average of the form.
 * 
 * @return {boolean} False if there are errors, true if there are no errors.
 */
function validateAverage() {
  error = $('#average').val();

  if (error == "")
    return errorMessage('Este campo es requerido.');
  else if (!error.match(/^[+]?[0-9]+([.][0-9]{1,2})?$/))
    return errorMessage('Debe cumplir el formato "##.##".');
  else if ( !(error >= 0 && error <= 10) )
    return errorMessage('Debe estar en el rango de 0 a 10.');

  $('#average').removeClass('border border-danger');
  $('#error').empty();

  return true;
}

/**
 * Show the error message.
 * 
 * @param {string}   message Error message.
 * @return {boolean}         Indicates that there is an error.
 */
function errorMessage(message) {
  $('#error').empty();
  $('#error').append( `<i class="fas fa-exclamation-triangle"></i> ${message}` );
  $('#average').addClass('border border-danger');
  $('#result').hide();

  return false;
}