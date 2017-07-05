using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class CameraPrincipal : MonoBehaviour {

	private static Vector3 direita;
	private static Vector3 esquerda;
	private static Vector3 paraCima;
	private static Vector3 paraBaixo;

	public int cena;

	public static float LimitarDireitaX(Vector3 eixo)
	{
		//Capturando o eixo z do player, a câmera e subtraindo
		float distanciaZ = eixo.z - Camera.main.transform.position.z;
		direita = Camera.main.ScreenToWorldPoint(new Vector3(Screen.width, 0, distanciaZ));

		return direita.x;
	}

	public static float LimitarEsquerdaX(Vector3 eixo)
	{
		//Capturando o eixo z do player, a câmera e subtraindo
		float distanciaZ = eixo.z - Camera.main.transform.position.z;
		esquerda = Camera.main.ScreenToWorldPoint(new Vector3(0, 0, distanciaZ));

		return esquerda.x;
	}

	public static float LimitarParaBaixoY(Vector3 eixo)
	{
		//Capturando o eixo z do player, a câmera e subtraindo
		float distanciaZ = eixo.z - Camera.main.transform.position.z;
		paraBaixo = Camera.main.ScreenToWorldPoint(new Vector3(0, 0, distanciaZ));

		return paraBaixo.y;
	}

	public static float LimitarParaCimaY(Vector3 eixo)
	{
		//Capturando o eixo z do player, a câmera e subtraindo
		float distanciaZ = eixo.z - Camera.main.transform.position.z;
		paraCima = Camera.main.ScreenToWorldPoint(new Vector3(0, Screen.height, distanciaZ));

		return paraCima.y;
	}

	public static Vector2 CoordenadaCamera()
	{
		Vector3 posicao = Camera.main.ScreenToWorldPoint(new Vector3(Screen.width, Screen.height, 0));

		return posicao;
	}

	void Update()
	{
		if (Input.GetKeyDown(KeyCode.N))
		{
			SceneManager.LoadScene(cena);
		}

		if (Input.GetKeyDown(KeyCode.Escape))
		{
			Application.Quit();
		}
	}
}
