import{Fragment,h}from"@stencil/core";import{getLineItemByPriceId}from"../../../../functions/line-items";import{state as checkoutState}from"@store/checkout";export class ScPriceChoices{constructor(){this.label=void 0,this.columns=1,this.required=!0}handleChange(){this.el.querySelectorAll("sc-price-choice").forEach((e=>{var t;const i=e.querySelector("sc-choice")||e.querySelector("sc-choice-container");if(null==i?void 0:i.checked){const r=getLineItemByPriceId(null===(t=checkoutState.checkout)||void 0===t?void 0:t.line_items,i.value);this.scUpdateLineItem.emit({price_id:e.priceId,quantity:(null==r?void 0:r.quantity)||(null==e?void 0:e.quantity)||1})}else this.scRemoveLineItem.emit({price_id:e.priceId,quantity:e.quantity})}))}render(){return h(Fragment,null,h("sc-choices",{label:this.label,required:this.required,class:"loaded price-selector",style:{"--columns":this.columns.toString()}},h("slot",null)))}static get is(){return"sc-price-choices"}static get originalStyleUrls(){return{$:["sc-price-choices.css"]}}static get styleUrls(){return{$:["sc-price-choices.css"]}}static get properties(){return{label:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:"Selector label"},attribute:"label",reflect:!1},columns:{type:"number",mutable:!1,complexType:{original:"number",resolved:"number",references:{}},required:!1,optional:!1,docs:{tags:[],text:"Number of columns"},attribute:"columns",reflect:!1,defaultValue:"1"},required:{type:"boolean",mutable:!1,complexType:{original:"boolean",resolved:"boolean",references:{}},required:!1,optional:!1,docs:{tags:[],text:"Required by default"},attribute:"required",reflect:!1,defaultValue:"true"}}}static get events(){return[{method:"scRemoveLineItem",name:"scRemoveLineItem",bubbles:!0,cancelable:!0,composed:!0,docs:{tags:[],text:"Toggle line item event"},complexType:{original:"LineItemData",resolved:"LineItemData",references:{LineItemData:{location:"import",path:"../../../../types"}}}},{method:"scUpdateLineItem",name:"scUpdateLineItem",bubbles:!0,cancelable:!0,composed:!0,docs:{tags:[],text:"Toggle line item event"},complexType:{original:"LineItemData",resolved:"LineItemData",references:{LineItemData:{location:"import",path:"../../../../types"}}}}]}static get elementRef(){return"el"}static get listeners(){return[{name:"scChange",method:"handleChange",target:void 0,capture:!1,passive:!1}]}}