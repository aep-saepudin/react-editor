export const debug = new function () {

  let dataArray = {}
  this.add = (dt) => {
    dataArray = { ...dataArray,...dt}
    return this
  }
  this.run = () => console.log(dataArray)

}()

export const log = (v) => console.log(v)
export const logx = () => console.log("juara")