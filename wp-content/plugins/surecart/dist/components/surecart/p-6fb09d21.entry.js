import{r as s,h as t,H as e}from"./p-cc7ce8c7.js";import{g as i}from"./p-1ccea758.js";import{f as p}from"./p-a27e9b70.js";import"./p-c06b2e12.js";import"./p-25433d0f.js";import"./p-f70181c4.js";import"./p-24f06282.js";import"./p-4d73f82a.js";import"./p-1c2e2695.js";import"./p-830ab1a3.js";import"./p-a3a138d6.js";import"./p-7ef0f71c.js";import"./p-50da3ba3.js";import"./p-c27fae79.js";const r="sc-express-payment{display:block}";const o=class{constructor(t){s(this,t);this.processor=undefined;this.dividerText=undefined;this.debug=undefined;this.hasPaymentOptions=undefined}onPaymentRequestLoaded(){this.hasPaymentOptions=true}renderStripePaymentRequest(){const{processor_data:s}=i("stripe")||{};return t("sc-stripe-payment-request",{debug:this.debug,stripeAccountId:s===null||s===void 0?void 0:s.account_id,publishableKey:s===null||s===void 0?void 0:s.publishable_key})}render(){return t(e,{class:{"is-empty":!this.hasPaymentOptions&&!this.debug}},this.renderStripePaymentRequest(),(this.hasPaymentOptions||this.debug)&&t("sc-divider",{style:{"--spacing":"calc(var(--sc-form-row-spacing)/2)"}},this.dividerText),!!p()&&t("sc-block-ui",null))}};o.style=r;export{o as sc_express_payment};
//# sourceMappingURL=p-6fb09d21.entry.js.map