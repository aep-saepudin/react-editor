import React, { Component } from 'react';
import { IframeComp } from './canvas/Iframe';


const data = {
  cid          : 17,
  layanan_id   : 15,
  dirpath      : "mantap",
  hastemplate  : 1,
  template_file: "Template_3",
  email        : "aep.stmik@gmail.com",
  appid        : 1,
  cfgfile      : "6utp0",
  subdomain    : null,
  local        : 1
}

class App extends Component {
  render() {
    return (
      <IframeComp src= {process.env.PUBLIC_URL + "/resource/template/" + data.template_file} />
    )
  }
}

export default App;