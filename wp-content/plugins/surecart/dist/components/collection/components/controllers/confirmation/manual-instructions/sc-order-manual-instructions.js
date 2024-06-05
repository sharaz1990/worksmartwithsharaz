import{h,Host}from"@stencil/core";import{openWormhole}from"stencil-wormhole";export class ScOrderManualInstructions{constructor(){this.manualPaymentTitle=void 0,this.manualPaymentInstructions=void 0}render(){return this.manualPaymentInstructions&&this.manualPaymentTitle?h("sc-alert",{type:"info",open:!0},h("span",{slot:"title"},this.manualPaymentTitle),h("div",{innerHTML:this.manualPaymentInstructions})):h(Host,{style:{display:"none"}})}static get is(){return"sc-order-manual-instructions"}static get encapsulation(){return"shadow"}static get originalStyleUrls(){return{$:["sc-order-manual-instructions.css"]}}static get styleUrls(){return{$:["sc-order-manual-instructions.css"]}}static get properties(){return{manualPaymentTitle:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"manual-payment-title",reflect:!1},manualPaymentInstructions:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"manual-payment-instructions",reflect:!1}}}}openWormhole(ScOrderManualInstructions,["manualPaymentTitle","manualPaymentInstructions"],!1);