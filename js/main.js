main = (() => {

    var _fileConfig = {
        maxSize: 50,
        maxFiles: 5,
        allowedExtensions: ['png', 'jpg', 'jpeg', 'gif', 'svg', 'pdf']
    };

    // file validation
    var setFileConfig = (config) => {
        config.maxSize = config.maxSize ? config.maxSize : _fileConfig.maxSize;
        config.maxFiles = config.maxFiles ? config.maxFiles : _fileConfig.maxFiles;
        config.allowedExtensions = config.allowedExtensions ? config.allowedExtensions : _fileConfig.allowedExtensions;

        return config;
    };
    var validateFiles = (f, configData) => {

        let config = setFileConfig(configData);
        let files = [...f];
        let errors = [];

        let validFiles = [];

        if (typeof files == 'undefined' || !files.length) {
            errors.push(`Te veel bestanden geselecteerd, het maximum is: ${config.maxFiles}.`);
        }

        let fileCount = 1;

        for (key in files) {

            let file = files[key];
            let ext = getExtensionFromFileName(file.name);
            let errorMsg = [];
            
            if (ext && !config.allowedExtensions.includes(ext.toLowerCase())) {
                errorMsg.push(`De extentie '${ext}' is ongeldig.`);
            }
            else if (file.size > (config.maxSize * 1048576)) {
                errorMsg.push(`Het bestand mag maximaal ${config.maxSize}mb zijn.`);
            }

            if (errorMsg.length > 0) {
                errors.push(errorMsg[0]);
            }
            else {
                validFiles.push(file);
            }

            fileCount++;
        }

        return { errors, validFiles };

    };
    checkFiles = (e) => {

        const fileResponse = validateFiles(e.target.files, _fileConfig);

        const targetId = e.target.id;
        const target = document.getElementById(targetId);

        // Do something if a file has an error.
        if (fileResponse.errors.length) {
            
            let text = document.createElement('p');
            text.className = 'error';
            text.append(document.createTextNode(fileResponse.errors[0]));

            target.value = null;
            target.parentNode.insertBefore(text, target.nextSibling);
        }
        else {
            document.querySelectorAll('.error').forEach(e => e.remove());
        }
    };
    

    // helpers
    var getExtensionFromFileName = (name) => {
        return name.substring(name.lastIndexOf('.') + 1);
    };

    return {
        checkFiles: checkFiles
    }

})();