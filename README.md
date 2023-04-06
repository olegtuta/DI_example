# DI_example

The code shows the implementation of the dependency injection pattern. This is a prime example of how to correctly build your application, which depends on abstractions, not specific implementations. In this example, we have two different implementations of the contract: a gas car and an electric car. Of course, instead of ElectricEngine and GazolineEngine, we could create a more general Engine class. But on such a small code, it is difficult to demonstrate an example close to reality. DI is applicable in large applications, where the business logic is described in the abstract, and the concrete implementation is delegated to classes with low priority.

