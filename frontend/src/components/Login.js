import { zodResolver } from "@hookform/resolvers/zod";
import { useForm } from "react-hook-form";
import { z } from "zod";
import "./login.css";

const schema = z.object({
  username: z.string(),
  email: z.string().email(),
  password: z.string().min(8),
});

const Login = () => {
  const {
    register,
    handleSubmit,
    setError,
    formState: { errors, isSubmitting },
  } = useForm({
    resolver: zodResolver(schema),
  });

  const onSubmit = async (data) => {
    try {
      await new Promise((resolve) => setTimeout(resolve, 1000));
      console.log(data);
    } catch (error) {
      setError("root", {
        message: "This email is already taken",
      });
    }
  };

  return (
    <>
      <div className="form-container">
        <div className="container-1">
          <h3>Welcome to 
            Health & Wellness Hub</h3>
          <p>
            Your ultimate destination for all things nutrition and wellness. 
            <br></br>
            Our mission is to empower you with the knowledge, tools, and support you need to lead a vibrant and healthy life.
          </p>
        </div>
        <div className="container-2">
          <form className="tutorial gap-2" onSubmit={handleSubmit(onSubmit)}>
            <h2>Create your account</h2>
            <input
              {...register("username")}
              type="text"
              className="input"
              placeholder="Username"
            />
            {errors.username && (
              <div className="text-red-500">{errors.username.message}</div>
            )}
            <input
              {...register("email")}
              type="text"
              className="input"
              placeholder="name@email.com"
            />
            {errors.email && (
              <div className="text-red-500">{errors.email.message}</div>
            )}
            <input
              {...register("password")}
              type="password"
              className="input"
              placeholder="Password"
            />
            {errors.password && (
              <div className="text-red-500">{errors.password.message}</div>
            )}
            <button
              disabled={isSubmitting}
              type="submit"
              className="submit-btn"
            >
              {isSubmitting ? "Loading..." : "Submit"}
            </button>
            {errors.root && (
              <div className="text-red-500">{errors.root.message}</div>
            )}
          </form>
        </div>
      </div>
    </>
  );
};

export default Login;
