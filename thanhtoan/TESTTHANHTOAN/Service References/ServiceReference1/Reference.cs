﻿//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//     Runtime Version:4.0.30319.42000
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace TESTTHANHTOAN.ServiceReference1 {
    
    
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ServiceModel.ServiceContractAttribute(ConfigurationName="ServiceReference1.WebServiceSoap")]
    public interface WebServiceSoap {
        
        // CODEGEN: Generating message contract since element name HelloWorldResult from namespace http://tempuri.org/ is not marked nillable
        [System.ServiceModel.OperationContractAttribute(Action="http://tempuri.org/HelloWorld", ReplyAction="*")]
        TESTTHANHTOAN.ServiceReference1.HelloWorldResponse HelloWorld(TESTTHANHTOAN.ServiceReference1.HelloWorldRequest request);
        
        [System.ServiceModel.OperationContractAttribute(Action="http://tempuri.org/HelloWorld", ReplyAction="*")]
        System.Threading.Tasks.Task<TESTTHANHTOAN.ServiceReference1.HelloWorldResponse> HelloWorldAsync(TESTTHANHTOAN.ServiceReference1.HelloWorldRequest request);
        
        // CODEGEN: Generating message contract since element name data from namespace http://tempuri.org/ is not marked nillable
        [System.ServiceModel.OperationContractAttribute(Action="http://tempuri.org/md5", ReplyAction="*")]
        TESTTHANHTOAN.ServiceReference1.md5Response md5(TESTTHANHTOAN.ServiceReference1.md5Request request);
        
        [System.ServiceModel.OperationContractAttribute(Action="http://tempuri.org/md5", ReplyAction="*")]
        System.Threading.Tasks.Task<TESTTHANHTOAN.ServiceReference1.md5Response> md5Async(TESTTHANHTOAN.ServiceReference1.md5Request request);
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
    [System.ServiceModel.MessageContractAttribute(IsWrapped=false)]
    public partial class HelloWorldRequest {
        
        [System.ServiceModel.MessageBodyMemberAttribute(Name="HelloWorld", Namespace="http://tempuri.org/", Order=0)]
        public TESTTHANHTOAN.ServiceReference1.HelloWorldRequestBody Body;
        
        public HelloWorldRequest() {
        }
        
        public HelloWorldRequest(TESTTHANHTOAN.ServiceReference1.HelloWorldRequestBody Body) {
            this.Body = Body;
        }
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
    [System.Runtime.Serialization.DataContractAttribute()]
    public partial class HelloWorldRequestBody {
        
        public HelloWorldRequestBody() {
        }
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
    [System.ServiceModel.MessageContractAttribute(IsWrapped=false)]
    public partial class HelloWorldResponse {
        
        [System.ServiceModel.MessageBodyMemberAttribute(Name="HelloWorldResponse", Namespace="http://tempuri.org/", Order=0)]
        public TESTTHANHTOAN.ServiceReference1.HelloWorldResponseBody Body;
        
        public HelloWorldResponse() {
        }
        
        public HelloWorldResponse(TESTTHANHTOAN.ServiceReference1.HelloWorldResponseBody Body) {
            this.Body = Body;
        }
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
    [System.Runtime.Serialization.DataContractAttribute(Namespace="http://tempuri.org/")]
    public partial class HelloWorldResponseBody {
        
        [System.Runtime.Serialization.DataMemberAttribute(EmitDefaultValue=false, Order=0)]
        public string HelloWorldResult;
        
        public HelloWorldResponseBody() {
        }
        
        public HelloWorldResponseBody(string HelloWorldResult) {
            this.HelloWorldResult = HelloWorldResult;
        }
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
    [System.ServiceModel.MessageContractAttribute(IsWrapped=false)]
    public partial class md5Request {
        
        [System.ServiceModel.MessageBodyMemberAttribute(Name="md5", Namespace="http://tempuri.org/", Order=0)]
        public TESTTHANHTOAN.ServiceReference1.md5RequestBody Body;
        
        public md5Request() {
        }
        
        public md5Request(TESTTHANHTOAN.ServiceReference1.md5RequestBody Body) {
            this.Body = Body;
        }
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
    [System.Runtime.Serialization.DataContractAttribute(Namespace="http://tempuri.org/")]
    public partial class md5RequestBody {
        
        [System.Runtime.Serialization.DataMemberAttribute(EmitDefaultValue=false, Order=0)]
        public string data;
        
        public md5RequestBody() {
        }
        
        public md5RequestBody(string data) {
            this.data = data;
        }
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
    [System.ServiceModel.MessageContractAttribute(IsWrapped=false)]
    public partial class md5Response {
        
        [System.ServiceModel.MessageBodyMemberAttribute(Name="md5Response", Namespace="http://tempuri.org/", Order=0)]
        public TESTTHANHTOAN.ServiceReference1.md5ResponseBody Body;
        
        public md5Response() {
        }
        
        public md5Response(TESTTHANHTOAN.ServiceReference1.md5ResponseBody Body) {
            this.Body = Body;
        }
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
    [System.Runtime.Serialization.DataContractAttribute(Namespace="http://tempuri.org/")]
    public partial class md5ResponseBody {
        
        [System.Runtime.Serialization.DataMemberAttribute(EmitDefaultValue=false, Order=0)]
        public string md5Result;
        
        public md5ResponseBody() {
        }
        
        public md5ResponseBody(string md5Result) {
            this.md5Result = md5Result;
        }
    }
    
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    public interface WebServiceSoapChannel : TESTTHANHTOAN.ServiceReference1.WebServiceSoap, System.ServiceModel.IClientChannel {
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    public partial class WebServiceSoapClient : System.ServiceModel.ClientBase<TESTTHANHTOAN.ServiceReference1.WebServiceSoap>, TESTTHANHTOAN.ServiceReference1.WebServiceSoap {
        
        public WebServiceSoapClient() {
        }
        
        public WebServiceSoapClient(string endpointConfigurationName) : 
                base(endpointConfigurationName) {
        }
        
        public WebServiceSoapClient(string endpointConfigurationName, string remoteAddress) : 
                base(endpointConfigurationName, remoteAddress) {
        }
        
        public WebServiceSoapClient(string endpointConfigurationName, System.ServiceModel.EndpointAddress remoteAddress) : 
                base(endpointConfigurationName, remoteAddress) {
        }
        
        public WebServiceSoapClient(System.ServiceModel.Channels.Binding binding, System.ServiceModel.EndpointAddress remoteAddress) : 
                base(binding, remoteAddress) {
        }
        
        [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
        TESTTHANHTOAN.ServiceReference1.HelloWorldResponse TESTTHANHTOAN.ServiceReference1.WebServiceSoap.HelloWorld(TESTTHANHTOAN.ServiceReference1.HelloWorldRequest request) {
            return base.Channel.HelloWorld(request);
        }
        
        public string HelloWorld() {
            TESTTHANHTOAN.ServiceReference1.HelloWorldRequest inValue = new TESTTHANHTOAN.ServiceReference1.HelloWorldRequest();
            inValue.Body = new TESTTHANHTOAN.ServiceReference1.HelloWorldRequestBody();
            TESTTHANHTOAN.ServiceReference1.HelloWorldResponse retVal = ((TESTTHANHTOAN.ServiceReference1.WebServiceSoap)(this)).HelloWorld(inValue);
            return retVal.Body.HelloWorldResult;
        }
        
        [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
        System.Threading.Tasks.Task<TESTTHANHTOAN.ServiceReference1.HelloWorldResponse> TESTTHANHTOAN.ServiceReference1.WebServiceSoap.HelloWorldAsync(TESTTHANHTOAN.ServiceReference1.HelloWorldRequest request) {
            return base.Channel.HelloWorldAsync(request);
        }
        
        public System.Threading.Tasks.Task<TESTTHANHTOAN.ServiceReference1.HelloWorldResponse> HelloWorldAsync() {
            TESTTHANHTOAN.ServiceReference1.HelloWorldRequest inValue = new TESTTHANHTOAN.ServiceReference1.HelloWorldRequest();
            inValue.Body = new TESTTHANHTOAN.ServiceReference1.HelloWorldRequestBody();
            return ((TESTTHANHTOAN.ServiceReference1.WebServiceSoap)(this)).HelloWorldAsync(inValue);
        }
        
        [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
        TESTTHANHTOAN.ServiceReference1.md5Response TESTTHANHTOAN.ServiceReference1.WebServiceSoap.md5(TESTTHANHTOAN.ServiceReference1.md5Request request) {
            return base.Channel.md5(request);
        }
        
        public string md5(string data) {
            TESTTHANHTOAN.ServiceReference1.md5Request inValue = new TESTTHANHTOAN.ServiceReference1.md5Request();
            inValue.Body = new TESTTHANHTOAN.ServiceReference1.md5RequestBody();
            inValue.Body.data = data;
            TESTTHANHTOAN.ServiceReference1.md5Response retVal = ((TESTTHANHTOAN.ServiceReference1.WebServiceSoap)(this)).md5(inValue);
            return retVal.Body.md5Result;
        }
        
        [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Advanced)]
        System.Threading.Tasks.Task<TESTTHANHTOAN.ServiceReference1.md5Response> TESTTHANHTOAN.ServiceReference1.WebServiceSoap.md5Async(TESTTHANHTOAN.ServiceReference1.md5Request request) {
            return base.Channel.md5Async(request);
        }
        
        public System.Threading.Tasks.Task<TESTTHANHTOAN.ServiceReference1.md5Response> md5Async(string data) {
            TESTTHANHTOAN.ServiceReference1.md5Request inValue = new TESTTHANHTOAN.ServiceReference1.md5Request();
            inValue.Body = new TESTTHANHTOAN.ServiceReference1.md5RequestBody();
            inValue.Body.data = data;
            return ((TESTTHANHTOAN.ServiceReference1.WebServiceSoap)(this)).md5Async(inValue);
        }
    }
}