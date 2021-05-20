"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }

main = function () {
  var _fileConfig = {
    maxSize: 50,
    maxFiles: 5,
    allowedExtensions: ['png', 'jpg', 'jpeg', 'gif', 'svg', 'pdf']
  }; // file validation

  var setFileConfig = function setFileConfig(config) {
    config.maxSize = config.maxSize ? config.maxSize : _fileConfig.maxSize;
    config.maxFiles = config.maxFiles ? config.maxFiles : _fileConfig.maxFiles;
    config.allowedExtensions = config.allowedExtensions ? config.allowedExtensions : _fileConfig.allowedExtensions;
    return config;
  };

  var validateFiles = function validateFiles(f, configData) {
    var config = setFileConfig(configData);

    var files = _toConsumableArray(f);

    var errors = [];
    var validFiles = [];

    if (typeof files == 'undefined' || !files.length) {
      errors.push("Te veel bestanden geselecteerd, het maximum is: ".concat(config.maxFiles, "."));
    }

    var fileCount = 1;

    for (key in files) {
      var file = files[key];
      var ext = getExtensionFromFileName(file.name);
      var errorMsg = [];

      if (ext && !config.allowedExtensions.includes(ext.toLowerCase())) {
        errorMsg.push("De extentie '".concat(ext, "' is ongeldig."));
      } else if (file.size > config.maxSize * 1048576) {
        errorMsg.push("Het bestand mag maximaal ".concat(config.maxSize, "mb zijn."));
      }

      if (errorMsg.length > 0) {
        errors.push(errorMsg[0]);
      } else {
        validFiles.push(file);
      }

      fileCount++;
    }

    return {
      errors: errors,
      validFiles: validFiles
    };
  };

  checkFiles = function checkFiles(e) {
    var fileResponse = validateFiles(e.target.files, _fileConfig);
    var targetId = e.target.id;
    var target = document.getElementById(targetId); // Do something if a file has an error.

    if (fileResponse.errors.length) {
      var text = document.createElement('p');
      text.className = 'error';
      text.append(document.createTextNode(fileResponse.errors[0]));
      target.value = null;
      target.parentNode.insertBefore(text, target.nextSibling);
    } else {
      document.querySelectorAll('.error').forEach(function (e) {
        return e.remove();
      });
    }
  }; // helpers


  var getExtensionFromFileName = function getExtensionFromFileName(name) {
    return name.substring(name.lastIndexOf('.') + 1);
  };

  return {
    checkFiles: checkFiles
  };
}();