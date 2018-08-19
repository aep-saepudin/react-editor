/* @param {HTMLElement} dom */
export const find    = dom => s => dom.querySelector(s)
export const findAll = dom => s => dom.querySelectorAll(s)

/* @param {HTMLIframe} iframe */
export const getWindow   = iframe => iframe.contentWindow
export const getDocument = iframe => iframe.contentDocument
/* @param {String} s selector*/
export const ifind       = iframe => s => find(getDocument(iframe))(s)
export const ifindall    = iframe => s => findAll(getDocument(iframe))(s)


export const dfind = (s) => find(s)(document)

/* Main Code */
