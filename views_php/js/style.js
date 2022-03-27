
imgInp1.onchange = evt => {
    const [file] = imgInp1.files
    if (file) {
        tampilkan1.src = URL.createObjectURL(file)
    }
}

imgInp2.onchange = evt => {
    const [file] = imgInp2.files
    if (file) {
        tampilkan2.src = URL.createObjectURL(file)
    }
}

imgEdit1.onchange = evt => {
    const [file] = imgEdit1.files
    if (file) {
        tampilEdit1.src = URL.createObjectURL(file)
    }
}

imgEdit2.onchange = evt => {
    const [file] = imgEdit2.files
    if (file) {
        tampilEdit2.src = URL.createObjectURL(file)
    }
}