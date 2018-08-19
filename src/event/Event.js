import { dfind } from "../function/dom.fn";


export const onload_s = (selector) => (fn) => {
  const el = dfind(selector)  
  el.addEventListener("load", fn)
  return el
}

export const onload = (dom) => (fn) => {
  dom.addEventListener("load", fn)
  return dom
}

export const onCLick = (dom) => (fn) => {
  dom.addEventListener("click", fn)
}