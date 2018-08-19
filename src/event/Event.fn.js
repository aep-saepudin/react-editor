import { ifindall } from "../function/dom.fn";
import { logx } from "../helper/debugger";
import { onCLick } from "./Event";


export const iframeLoadCode = (iframe, that)=>{
  
  const iFindAll    = ifindall(iframe)
  const addClickAll = (el) => onCLick(el)(logx)

  return (e)=>{
    const texts = iFindAll('p')
    texts.forEach(addClickAll)
  }

}