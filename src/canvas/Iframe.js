import React  from 'react';
import { onload} from '../event/Event';
import "../css/compiled/lmain.css"


export class IframeComp extends React.Component  {
  constructor(){
    super()
    this.myRef = React.createRef()
  }

  componentDidMount(){

    /** @type {HTMLElement} */
    const iframe     = this.myRef.current
    const iframeOnLoad = onload(iframe)

    const iframeCode =  (e)=>console.log(iframe.contentDocument)
    iframeOnLoad(iframeCode)

  }


  render(){
    return (
      <iframe 
        className = "full-wh-2"
        title     = "Canvas"
        src       = {this.props.src}
        ref       = {this.myRef}
      ></iframe>
    );
  }
}