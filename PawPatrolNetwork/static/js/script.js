
    const fileElement = document.getElementById("file-ppn");
    const allowed_extensions = ["jpg", "JPG"];

    function onDivClick() {
      if (fileElement) {
        fileElement.click();
      }
    }

    function getFileName(name = "") {
      const [extension] = name.split(".").slice(-1);
      return allowed_extensions.includes(extension);
    }

    function onFileChange(event) {
      if (event.target.files.length) {
        // console.log(event.target.files[0]);

        const file = document.querySelector('#file-ppn').files[0];
        console.log(getBase64(file));
        const extension = getFileName(event.target.files[0]?.name);
        if (!extension) {
          alert("Only jpg format is allowed");
        }
      }
    }

    function validateForm(event) {
      if (!fileElement.files?.length) {
        event.preventDefault();
        alert("Please select an image");
      }
      if (fileElement.files.length) {
        const extension = getFileName(event.target.files[0]?.name);
        if (!extension) {
          event.preventDefault();
          alert("Only jpg format is allowed");
        }
      }
    }

    function getBase64(file) {
     var reader = new FileReader();
     reader.readAsDataURL(file);
     reader.onload = function () {
       console.log(reader.result);
       document.getElementById('uploaded-img').src =reader.result;
     };
     reader.onerror = function (error) {
       console.log('Error: ', error);
     };
  }
